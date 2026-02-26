# dcForm Project Structure (Simple)

```text
dcform/
├─ admin/
│  ├─ actions/
│  └─ includes/
├─ assets/
│  ├─ css/
│  ├─ js/
│  └─ img/
├─ core/
│  ├─ bootstrap.php
│  ├─ config.php
│  ├─ database.php
│  ├─ functions.php
│  └─ mailer.php
├─ includes/
│  ├─ header.php
│  ├─ navbar.php
│  └─ footer.php
├─ modules/
│  ├─ ajax/
│  ├─ forms/
│  └─ payments/
├─ storage/
├─ vendor/
├─ .env
├─ index.php
├─ form.php
└─ thank-you.php
```

## Old to New Mapping

- `backend/config.php` -> `core/config.php`
- `backend/mailer.php` -> `core/mailer.php`
- `backend/validate.php` -> `modules/forms/validate.php`
- `backend/send_email.php` -> `modules/forms/send_email.php`
- `backend/documents.php` -> `modules/forms/documents.php`
- `backend/payment.php` -> `modules/payments/payment.php`
- `backend/payment_verify.php` -> `modules/payments/payment_verify.php`
- `backend/ajax/*.php` -> `modules/ajax/*.php`

## Compatibility

- `backend/*` and `backend/ajax/*` files are kept as thin wrappers.
- Is wajah se purane URLs aur old includes bhi chalenge.
- Naya code direct `core/*` aur `modules/*` use kare.
