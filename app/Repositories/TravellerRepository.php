<?php
declare(strict_types=1);

final class TravellerRepository
{
    public function findById(int $travellerId): ?array
    {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM travellers WHERE id = :id LIMIT 1");
        $stmt->execute([':id' => $travellerId]);
        $row = $stmt->fetch();
        return $row ?: null;
    }

    public function updateContact(int $travellerId, array $data): void
    {
        $db = getDB();
        $stmt = $db->prepare(
            "UPDATE travellers SET
                first_name=:fn, middle_name=:mn, last_name=:ln, email=:em,
                phone=:ph, travel_date=:td, purpose_of_visit=:pv
            WHERE id=:id"
        );

        $stmt->execute([
            ':fn' => $data['first_name'],
            ':mn' => $data['middle_name'],
            ':ln' => $data['last_name'],
            ':em' => $data['email'],
            ':ph' => $data['phone'],
            ':td' => $data['travel_date'],
            ':pv' => $data['purpose_of_visit'],
            ':id' => $travellerId,
        ]);
    }

    public function createContact(int $applicationId, int $travellerNumber, array $data): int
    {
        $db = getDB();
        $stmt = $db->prepare(
            "INSERT INTO travellers (
                application_id, traveller_number, first_name, middle_name, last_name, email, phone, travel_date, purpose_of_visit
            ) VALUES (
                :app,:num,:fn,:mn,:ln,:em,:ph,:td,:pv
            )"
        );

        $stmt->execute([
            ':app' => $applicationId,
            ':num' => $travellerNumber,
            ':fn' => $data['first_name'],
            ':mn' => $data['middle_name'],
            ':ln' => $data['last_name'],
            ':em' => $data['email'],
            ':ph' => $data['phone'],
            ':td' => $data['travel_date'],
            ':pv' => $data['purpose_of_visit'],
        ]);

        return (int)$db->lastInsertId();
    }

    public function updateFields(int $travellerId, array $fields): void
    {
        if (empty($fields)) {
            return;
        }

        $db = getDB();
        $sets = [];
        $params = [':id' => $travellerId];

        foreach ($fields as $key => $value) {
            $sets[] = $key . ' = :' . $key;
            $params[':' . $key] = $value;
        }

        $sql = "UPDATE travellers SET " . implode(', ', $sets) . " WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->execute($params);
    }

    public function updateFieldsByApplication(int $travellerId, int $applicationId, array $fields): void
    {
        if (empty($fields)) {
            return;
        }

        $db = getDB();
        $sets = [];
        $params = [':id' => $travellerId, ':application_id' => $applicationId];

        foreach ($fields as $key => $value) {
            $sets[] = $key . ' = :' . $key;
            $params[':' . $key] = $value;
        }

        $sql = "UPDATE travellers SET " . implode(', ', $sets) . " WHERE id = :id AND application_id = :application_id LIMIT 1";
        $stmt = $db->prepare($sql);
        $stmt->execute($params);
    }

    public function countCompletedDeclarations(int $applicationId): int
    {
        $db = getDB();
        $stmt = $db->prepare(
            "SELECT COUNT(*) FROM travellers
             WHERE application_id=:id AND decl_accurate=1 AND decl_terms=1 AND step_completed='declaration'"
        );
        $stmt->execute([':id' => $applicationId]);
        return (int)$stmt->fetchColumn();
    }

    public function findAllByApplication(int $applicationId): array
    {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM travellers WHERE application_id=:id ORDER BY traveller_number");
        $stmt->execute([':id' => $applicationId]);
        return $stmt->fetchAll() ?: [];
    }
}
