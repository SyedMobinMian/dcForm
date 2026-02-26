# dcForm Line-by-Line Teaching Notes (Roman Urdu)

## Kaise Use Karna Hai
- Har batch ko isi order me padho.
- Har function ke liye 8-point template follow karo:
  1) Location
  2) Input
  3) Validation
  4) Core Flow
  5) DB Effect
  6) Output
  7) Dependencies
  8) Failure Cases

## Master Index (Batch-wise)
- Batch 1: `backend/config.php` + `backend/validate.php`
- Batch 2: `backend/ajax/save_step_contact.php` + `backend/ajax/save_step_personal.php`
- Batch 3: `backend/ajax/save_step_passport.php` + `backend/ajax/save_step_residential.php`
- Batch 4: `backend/ajax/save_step_background.php` + `backend/ajax/save_step_declaration.php`
- Batch 5: `backend/ajax/update_traveller_review.php` + `backend/ajax/confirm_submission.php`
- Batch 6: `backend/payment.php` + `backend/payment_verify.php`
- Batch 7: `backend/mailer.php` + `backend/send_email.php` + `backend/documents.php`
- Batch 8: `admin/includes/bootstrap.php` + `admin/includes/auth.php`

---

## Batch 1 - `backend/config.php` (Function-by-Function)

### 1) `loadEnvFile(string $path): void`
- Kaam: `.env` file se key=value read karke runtime env me set karta hai.
- Input: file path.
- Logic:
  - file read hoti hai
  - empty/comment lines skip
  - malformed lines skip
  - quoted values normalize
  - existing env overwrite nahi karta
- Result: config values env me available ho jati hain.
- Risk: galat format wali line silently skip ho jati hai.

### 2) `env(string $key, string $default = ''): string`
- Kaam: env value read karta hai fallback chain ke saath.
- Flow: `getenv()` -> `$_ENV` -> `$_SERVER` -> default.
- Result: har config read ka single source.

### 3) `envBool(string $key, bool $default = false): bool`
- Kaam: string env ko bool me convert karta hai.
- True set: `1,true,yes,on`.
- Result: feature flags reliable ho jati hain.

### 4) `getDB(): PDO`
- Kaam: singleton PDO connection deta hai.
- Flow:
  - DSN build
  - PDO options set (`ERRMODE_EXCEPTION`, `FETCH_ASSOC`, `EMULATE_PREPARES=false`)
  - first call me connect, baad me same instance return
- DB Effect: direct query nahi, connection provider hai.
- Failure: connection fail par HTTP 500 + JSON error.

### 5) `jsonResponse(bool $success, string $message, array $data = []): void`
- Kaam: uniform JSON response bhejta hai aur script stop karta hai.
- Result format: `{success, message, ...data}`
- Use: almost sab AJAX endpoints.

### 6) `cleanAlpha(string $val): string`
- Kaam: letters/space/hyphen ke alawa sab remove.

### 7) `cleanAlphaNum(string $val): string`
- Kaam: alphanumeric + space + hyphen allow.

### 8) `clean(string $value): string`
- Kaam: `trim + strip_tags + htmlspecialchars`.
- Result: storage-safe sanitized string.

### 9) `sanitize(string $value): string`
- Kaam: alias of `clean()`.

### 10) `generateReference(): string`
- Kaam: app reference generate karta hai (`ETA-XXXXYYYY-YYYYMMDD`).

### 11) `csrfToken(): string`
- Kaam: session me CSRF token create/return.

### 12) `verifyCsrf(string $token): bool`
- Kaam: submitted token ko session token se `hash_equals` se verify.
- Result: write endpoints CSRF-protected hote hain.

---

## Batch 1 - `backend/validate.php` (Function-by-Function)

### Single-field validators
- `validateName()`
  - Name required + regex constraints.
- `validateEmail()`
  - `filter_var` + regex + max length.
- `validatePhone()`
  - formatting chars hata kar E.164 style check.
- `validateDate()`
  - exact `Y-m-d` + real date.
- `validateFutureDate()`
  - date valid + today se aage.
- `validatePastDate()`
  - date valid + today se pehle.
- `validateSelect()`
  - empty/`0` reject.
- `validateRequired()`
  - non-empty + max length.
- `validatePostalCode()`
  - country-agnostic regex.
- `validatePassportNum()`
  - uppercase alphanumeric (len constraints).
- `validateTextarea()`
  - required + min/max len.

### Step validators (form workflow backbone)
- `validateStepContact(array $d)`
  - First/last name, email, phone, travel_date, purpose validate.
- `validateStepPersonal(array $d)`
  - DOB past date, gender enum, country/city/marital/nationality checks.
- `validateStepPassport(array $d)`
  - passport country/number, confirm match, issue/expiry date logic, conditional other citizenship.
- `validateStepResidential(array $d)`
  - address/country/city/postal/occupation required,
  - occupation ke basis par conditional employer fields.
- `validateStepBackground(array $d)`
  - visa_refusal/tuberculosis/criminal_history yes-no mandatory,
  - agar yes to details mandatory.
- `validateStepDeclaration(array $d)`
  - terms/accuracy dono `1` hone chahiye.

---

## Teaching Notes - Connectivity Map (Short)
- `pages/form.php` + `assets/js/form.js`
  - step data collect karta hai, AJAX endpoint hit karta hai.
- `backend/ajax/*.php`
  - request validate karte hain (method + CSRF + session),
  - validation layer call,
  - DB update/select,
  - `jsonResponse()` return.
- `backend/payment_verify.php`
  - payment confirm -> docs generate -> email send -> logs store.

---

## Next File for Detailed Batch
- Batch 2 start point:
  - `backend/ajax/save_step_contact.php`
  - `backend/ajax/save_step_personal.php`

