# dcForm Full Bilingual Project Guide

> Scope: First-party files only (vendor excluded).
> Purpose: Har file ka practical breakdown Roman Urdu + Professional English me.

## Inventory
- Total files: 64
- PHP: 46, JS: 2, CSS: 3, SQL: 3, MD: 4, Other: 6

## `admin\dashboard.php`
- Meri Zubaan: Ye file **Admin panel logic/view** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Admin panel logic/view**.
- Basic: ext=.php, lines=175
- Logic: if=2, else=0, for=0, foreach=5, while=0, switch=0, try=0
- Functions/Methods: metricIcon
- Meri Zubaan: Ye functions file ki core processing flow define karte hain.
- Professional English: These functions define the main processing flow in this file.
- HTML/UI: forms=0, tables=1, inputs=0, selects=0, scripts=0, links=0, divs=11
- SQL Density: approx_keywords=29
- SQL Tables: applications, form_access_tokens, travellers, payment_documents, current
- Variables (sample): icon, db, stats, safePercent, num, den, paymentConversion, formCompletion, groupShare, avgTicket, kpis, cards, graph, graphMax, g, recentDocs, kpi, idx, card, width
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `admin\documents.php`
- Meri Zubaan: Ye file **Admin panel logic/view** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Admin panel logic/view**.
- Basic: ext=.php, lines=81
- Logic: if=2, else=2, for=0, foreach=1, while=0, switch=0, try=0
- HTML/UI: forms=0, tables=1, inputs=0, selects=0, scripts=0, links=2, divs=0
- SQL Density: approx_keywords=6
- SQL Tables: kiya, payment_documents, applications, travellers
- Variables (sample): db, canManage, rows, row, receiptUrl, formUrl
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `admin\download.php`
- Meri Zubaan: Ye file **Admin panel logic/view** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Admin panel logic/view**.
- Basic: ext=.php, lines=56
- Logic: if=6, else=0, for=0, foreach=0, while=0, switch=0, try=0
- SQL Density: approx_keywords=3
- SQL Tables: payment_documents
- Variables (sample): type, _GET, id, db, stmt, row, relative, base, fullPath
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `admin\email.php`
- Meri Zubaan: Ye file **Admin panel logic/view** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Admin panel logic/view**.
- Basic: ext=.php, lines=220
- Logic: if=14, else=1, for=0, foreach=2, while=0, switch=0, try=0
- HTML/UI: forms=2, tables=1, inputs=6, selects=3, scripts=0, links=2, divs=2
- SQL Density: approx_keywords=30
- SQL Tables: travellers, form_access_tokens, admin_email_logs, Date
- Variables (sample): db, _SERVER, csrf, _POST, travellerId, country, customEmail, customSubject, customBody, allowed, stmt, traveller, email, access, link, name, subject, defaultBody, body, termsFooter
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `admin\form-links.php`
- Meri Zubaan: Ye file **Admin panel logic/view** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Admin panel logic/view**.
- Basic: ext=.php, lines=36
- Logic: if=0, else=0, for=0, foreach=1, while=0, switch=0, try=0
- HTML/UI: forms=0, tables=0, inputs=0, selects=0, scripts=0, links=1, divs=1
- Variables (sample): forms, form, url
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `admin\includes\auth.php`
- Meri Zubaan: Ye file **Admin panel logic/view** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Admin panel logic/view**.
- Basic: ext=.php, lines=109
- Logic: if=10, else=0, for=0, foreach=0, while=0, switch=0, try=0
- Functions/Methods: currentAdmin, isAdminLoggedIn, currentAdminRole, requireRole, canManageRecords, canCreateRecords, requireAdmin, adminLogin, adminLogout
- Meri Zubaan: Ye functions file ki core processing flow define karte hain.
- Professional English: These functions define the main processing flow in this file.
- SQL Density: approx_keywords=6
- SQL Tables: admin_users
- Variables (sample): _SESSION, admin, stmt, row, role, roles, username, password
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `admin\includes\bootstrap.php`
- Meri Zubaan: Ye file **Admin panel logic/view** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Admin panel logic/view**.
- Basic: ext=.php, lines=194
- Logic: if=7, else=0, for=0, foreach=0, while=1, switch=0, try=0
- Functions/Methods: adminDB, ensureAdminTables, esc, flash, consumeFlash, sanitizeEmail, sanitizeText, redirectTo, baseUrl, assetUrl, buildFormNumber, buildFormToken, getOrCreateFormAccess
- Meri Zubaan: Ye functions file ki core processing flow define karte hain.
- Professional English: These functions define the main processing flow in this file.
- SQL Density: approx_keywords=21
- SQL Tables: CURRENT_TIMESTAMP, admin_users, form_access_tokens
- Variables (sample): ready, db, count, stmt, value, type, message, _SESSION, f, maxLen, path, base, travellerId, country, tokenRow, up, formNumber, exists, token, ins
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `admin\includes\layout.php`
- Meri Zubaan: Ye file **Admin panel logic/view** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Admin panel logic/view**.
- Basic: ext=.php, lines=61
- Logic: if=1, else=0, for=0, foreach=0, while=0, switch=0, try=0
- Functions/Methods: renderAdminLayoutStart, renderAdminLayoutEnd
- Meri Zubaan: Ye functions file ki core processing flow define karte hain.
- Professional English: These functions define the main processing flow in this file.
- HTML/UI: forms=0, tables=0, inputs=0, selects=0, scripts=0, links=7, divs=4
- Variables (sample): title, active, admin, flash
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `admin\index.php`
- Meri Zubaan: Ye file **Admin panel logic/view** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Admin panel logic/view**.
- Basic: ext=.php, lines=13
- Logic: if=1, else=0, for=0, foreach=0, while=0, switch=0, try=0
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `admin\login.php`
- Meri Zubaan: Ye file **Admin panel logic/view** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Admin panel logic/view**.
- Basic: ext=.php, lines=62
- Logic: if=5, else=0, for=0, foreach=0, while=0, switch=0, try=0
- HTML/UI: forms=1, tables=0, inputs=3, selects=0, scripts=0, links=0, divs=1
- Variables (sample): _SERVER, username, _POST, password, csrf, flash
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `admin\logout.php`
- Meri Zubaan: Ye file **Admin panel logic/view** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Admin panel logic/view**.
- Basic: ext=.php, lines=11
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `admin\settings.php`
- Meri Zubaan: Ye file **Admin panel logic/view** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Admin panel logic/view**.
- Basic: ext=.php, lines=92
- Logic: if=8, else=1, for=0, foreach=0, while=0, switch=0, try=0
- HTML/UI: forms=1, tables=0, inputs=5, selects=0, scripts=0, links=0, divs=0
- SQL Density: approx_keywords=10
- SQL Tables: hogi, admin, allow, admin_users, me, Admin
- Variables (sample): db, admin, canManage, _SERVER, csrf, _POST, username, email, currentPassword, newPassword, check, hash, params, sql, stmt
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `admin\users.php`
- Meri Zubaan: Ye file **Admin panel logic/view** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Admin panel logic/view**.
- Basic: ext=.php, lines=403
- Logic: if=26, else=6, for=0, foreach=3, while=0, switch=0, try=2
- Functions/Methods: redirectUsers
- Meri Zubaan: Ye functions file ki core processing flow define karte hain.
- Professional English: These functions define the main processing flow in this file.
- HTML/UI: forms=2, tables=1, inputs=12, selects=2, scripts=0, links=4, divs=14
- SQL Density: approx_keywords=61
- SQL Tables: travellers, applications, is, form_access_tokens, User
- Variables (sample): db, canCreate, canManage, editRow, editId, _GET, stmt, isEdit, _SERVER, csrf, _POST, action, travellerId, firstName, lastName, email, dob, countryFrom, travelMode, totalTravellers
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `assets\css\admin.css`
- Meri Zubaan: Ye file **Static frontend asset** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Static frontend asset**.
- Basic: ext=.css, lines=515
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- External URLs/CDNs: https://images.unsplash.com/photo-1517935706615-2717063c2225?auto=format&fit=crop&w=1200&q=80, https://images.unsplash.com/photo-1528127269322-539801943592?auto=format&fit=crop&w=1200&q=80, https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=1200&q=80
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `assets\css\style.css`
- Meri Zubaan: Ye file **Static frontend asset** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Static frontend asset**.
- Basic: ext=.css, lines=574
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- External URLs/CDNs: http://www.w3.org/2000/svg
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `assets\css\style1.css`
- Meri Zubaan: Ye file **Static frontend asset** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Static frontend asset**.
- Basic: ext=.css, lines=473
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- External URLs/CDNs: http://www.w3.org/2000/svg
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `assets\img\forms\canada-bg.svg`
- Meri Zubaan: Ye file **Static frontend asset** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Static frontend asset**.
- Basic: ext=.svg, lines=16
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- External URLs/CDNs: http://www.w3.org/2000/svg
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `assets\img\forms\uk-bg.svg`
- Meri Zubaan: Ye file **Static frontend asset** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Static frontend asset**.
- Basic: ext=.svg, lines=18
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- External URLs/CDNs: http://www.w3.org/2000/svg
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `assets\img\forms\vietnam-bg.svg`
- Meri Zubaan: Ye file **Static frontend asset** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Static frontend asset**.
- Basic: ext=.svg, lines=16
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- External URLs/CDNs: http://www.w3.org/2000/svg
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `assets\img\logo\logo.webp`
- Meri Zubaan: Ye file **Static frontend asset** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Static frontend asset**.
- Basic: ext=.webp, lines=9
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `assets\js\form.js`
- Meri Zubaan: Ye file **Static frontend asset** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Static frontend asset**.
- Basic: ext=.js, lines=676
- Logic: if=54, else=5, for=1, foreach=15, while=0, switch=0, try=4
- Functions/Methods: csrf, showLoader, hideLoader, showToast, navTo, updateStepper, updatePersonLabels, collectData, applyServerErrors, saveStep, escHtml, showVal, fieldLabel, formatReviewValue, buildTravellerFieldsGrid, updatePaymentSummary, getReviewEditInput, openReviewEditModal, buildReviewList, editTraveller, initiatePayment
- Meri Zubaan: Ye functions file ki core processing flow define karte hain.
- Professional English: These functions define the main processing flow in this file.
- JS Calls: fetch=7, jquery_ajax=0
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `assets\js\validator1.js`
- Meri Zubaan: Ye file **Static frontend asset** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Static frontend asset**.
- Basic: ext=.js, lines=349
- Logic: if=47, else=3, for=0, foreach=5, while=1, switch=0, try=1
- JS Calls: fetch=0, jquery_ajax=0
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\admin_schema.sql`
- Meri Zubaan: Ye file **Backend core service/utility** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Backend core service/utility**.
- Basic: ext=.sql, lines=58
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- SQL Density: approx_keywords=6
- SQL Tables: CURRENT_TIMESTAMP, environment
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\ajax\confirm_submission.php`
- Meri Zubaan: Ye file **AJAX API endpoint** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **AJAX API endpoint**.
- Basic: ext=.php, lines=99
- Logic: if=8, else=0, for=0, foreach=0, while=0, switch=0, try=0
- SQL Density: approx_keywords=13
- SQL Tables: applications, travellers, system_email_logs
- Variables (sample): _SERVER, _POST, applicationId, _SESSION, db, appStmt, app, reference, totalTravellers, doneStmt, doneCount, travellersStmt, travellers, alreadySentStmt, alreadySent, docs, primary, country, sent, mailError
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\ajax\get_cities.php`
- Meri Zubaan: Ye file **AJAX API endpoint** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **AJAX API endpoint**.
- Basic: ext=.php, lines=41
- Logic: if=1, else=0, for=0, foreach=0, while=0, switch=0, try=1
- SQL Density: approx_keywords=6
- SQL Tables: ho, cities
- Variables (sample): state_id, _GET, db, stmt, rows, e
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\ajax\get_cities_by_country.php`
- Meri Zubaan: Ye file **AJAX API endpoint** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **AJAX API endpoint**.
- Basic: ext=.php, lines=38
- Logic: if=1, else=0, for=0, foreach=0, while=0, switch=0, try=1
- SQL Density: approx_keywords=5
- SQL Tables: cities, states
- Variables (sample): countryId, _GET, db, stmt, rows, out, row, e
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\ajax\get_lookups.php`
- Meri Zubaan: Ye file **AJAX API endpoint** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **AJAX API endpoint**.
- Basic: ext=.php, lines=74
- Logic: if=2, else=0, for=0, foreach=0, while=0, switch=1, try=1
- SQL Density: approx_keywords=31
- SQL Tables: countries, visit_purposes, states
- Variables (sample): type, _GET, db, rows, countryId, stmt, name, row, countries, nationalities, purposes, e
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\ajax\get_states.php`
- Meri Zubaan: Ye file **AJAX API endpoint** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **AJAX API endpoint**.
- Basic: ext=.php, lines=39
- Logic: if=1, else=0, for=0, foreach=0, while=0, switch=0, try=1
- SQL Density: approx_keywords=6
- SQL Tables: karne, states
- Variables (sample): country_id, _GET, db, stmt, e
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\ajax\get_traveller.php`
- Meri Zubaan: Ye file **AJAX API endpoint** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **AJAX API endpoint**.
- Basic: ext=.php, lines=52
- Logic: if=3, else=0, for=0, foreach=0, while=0, switch=0, try=1
- SQL Density: approx_keywords=4
- SQL Tables: travellers, maarna
- Variables (sample): _SESSION, travellerNum, _GET, travellerDbId, db, stmt, row, e
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\ajax\save_step_background.php`
- Meri Zubaan: Ye file **AJAX API endpoint** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **AJAX API endpoint**.
- Basic: ext=.php, lines=88
- Logic: if=5, else=0, for=0, foreach=0, while=0, switch=0, try=1
- SQL Density: approx_keywords=4
- SQL Tables: kar, travellers
- Variables (sample): _SERVER, _POST, _SESSION, travellerNum, travellerDbId, data, errors, db, stmt, e
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\ajax\save_step_contact.php`
- Meri Zubaan: Ye file **AJAX API endpoint** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **AJAX API endpoint**.
- Basic: ext=.php, lines=95
- Logic: if=7, else=1, for=0, foreach=0, while=0, switch=0, try=0
- SQL Density: approx_keywords=6
- SQL Tables: applications, travellers
- Variables (sample): _SERVER, _POST, data, errors, travelMode, totalTravellers, travellerNum, db, _SESSION, ref, stmt, travellerDbId
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\ajax\save_step_declaration.php`
- Meri Zubaan: Ye file **AJAX API endpoint** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **AJAX API endpoint**.
- Basic: ext=.php, lines=77
- Logic: if=5, else=0, for=0, foreach=0, while=0, switch=0, try=0
- SQL Density: approx_keywords=3
- SQL Tables: karna, travellers
- Variables (sample): _SERVER, _POST, _SESSION, travellerNum, travellerDbId, data, errors, db, stmt, travelMode, totalTravellers, applicationId, reference, allDone
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\ajax\save_step_passport.php`
- Meri Zubaan: Ye file **AJAX API endpoint** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **AJAX API endpoint**.
- Basic: ext=.php, lines=86
- Logic: if=5, else=0, for=0, foreach=0, while=0, switch=0, try=1
- SQL Density: approx_keywords=3
- SQL Tables: travellers
- Variables (sample): _SERVER, _POST, _SESSION, travellerNum, travellerDbId, data, errors, db, stmt, e
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\ajax\save_step_personal.php`
- Meri Zubaan: Ye file **AJAX API endpoint** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **AJAX API endpoint**.
- Basic: ext=.php, lines=111
- Logic: if=12, else=0, for=0, foreach=1, while=0, switch=0, try=0
- SQL Density: approx_keywords=5
- SQL Tables: Step, travellers
- Variables (sample): _SERVER, _POST, _SESSION, travellerNum, travellerDbId, data, k, v, errors, err, db, stmt
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\ajax\save_step_residential.php`
- Meri Zubaan: Ye file **AJAX API endpoint** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **AJAX API endpoint**.
- Basic: ext=.php, lines=94
- Logic: if=5, else=0, for=0, foreach=0, while=0, switch=0, try=1
- SQL Density: approx_keywords=6
- SQL Tables: karne, ho, travellers, Error
- Variables (sample): _SERVER, _POST, _SESSION, travellerNum, travellerDbId, data, errors, noJob, hasJob, db, stmt, e
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\ajax\update_traveller_review.php`
- Meri Zubaan: Ye file **AJAX API endpoint** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **AJAX API endpoint**.
- Basic: ext=.php, lines=93
- Logic: if=9, else=2, for=0, foreach=1, while=0, switch=0, try=1
- SQL Density: approx_keywords=6
- SQL Tables: travellers, error, traveller
- Variables (sample): _SERVER, _POST, applicationId, _SESSION, travellerNum, travellerDbId, textFields, dateFields, boolFields, intFields, allowed, updates, params, field, key, raw, val, d, db, sql
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\cities_schema.sql`
- Meri Zubaan: Ye file **Backend core service/utility** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Backend core service/utility**.
- Basic: ext=.sql, lines=162
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- SQL Density: approx_keywords=153
- SQL Tables: states, cities
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\config.php`
- Meri Zubaan: Ye file **Backend core service/utility** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Backend core service/utility**.
- Basic: ext=.php, lines=221
- Logic: if=14, else=0, for=0, foreach=1, while=0, switch=0, try=1
- Functions/Methods: loadEnvFile, env, envBool, getDB, jsonResponse, cleanAlpha, cleanAlphaNum, clean, sanitize, generateReference, csrfToken, verifyCsrf
- Meri Zubaan: Ye functions file ki core processing flow define karte hain.
- Professional English: These functions define the main processing flow in this file.
- Constants: DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHARSET, MW_CLIENT_ID, MW_CLIENT_SECRET, MW_MMID, MW_API_BASE, MW_PAYFRAME_JS, MW_PAYFRAME_BASE, RAZORPAY_KEY_ID, RAZORPAY_KEY_SECRET, ADMIN_EMAIL, FROM_EMAIL, FROM_NAME, APP_URL, EMAIL_BCC_ADMIN, SMTP_HOST, SMTP_PORT, SMTP_SECURE, SMTP_USERNAME, SMTP_PASSWORD, DEV_EMAIL_MODE, DEV_EMAIL_DIR
- External URLs/CDNs: https://base.merchantwarrior.com/post/, https://securetest.merchantwarrior.com/payframe/payframe.js, https://securetest.merchantwarrior.com/payframe/, http://localhost/dcForm
- Variables (sample): path, lines, line, parts, key, val, _ENV, _SERVER, default, raw, appEnv, isLocal, pdo, dsn, options, e, success, message, data, value
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\db_schema.sql`
- Meri Zubaan: Ye file **Backend core service/utility** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Backend core service/utility**.
- Basic: ext=.sql, lines=251
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- SQL Density: approx_keywords=28
- SQL Tables: CURRENT_TIMESTAMP, visit_purposes, occupations, job_titles, countries, states
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\documents.php`
- Meri Zubaan: Ye file **Backend core service/utility** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Backend core service/utility**.
- Basic: ext=.php, lines=191
- Logic: if=2, else=0, for=1, foreach=4, while=0, switch=0, try=0
- Functions/Methods: ensurePaymentDocumentTable, buildAbsolutePath, ensureDir, pdfEscape, writeSimplePdf, generatePaymentDocuments, generateFormDetailsDocument
- Meri Zubaan: Ye functions file ki core processing flow define karte hain.
- Professional English: These functions define the main processing flow in this file.
- SQL Density: approx_keywords=15
- SQL Tables: travellers, applications
- Variables (sample): db, relativePath, relativeDir, abs, text, absolutePath, title, lines, objects, y, content, line, stream, pdf, offsets, obj, xrefPos, i, applicationId, reference
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\mailer.php`
- Meri Zubaan: Ye file **Backend core service/utility** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Backend core service/utility**.
- Basic: ext=.php, lines=189
- Logic: if=18, else=1, for=0, foreach=2, while=0, switch=0, try=1
- Classes: load
- Functions/Methods: detectMimeType, writeDevEmailFile, sendSmtpMail
- Meri Zubaan: Ye functions file ki core processing flow define karte hain.
- Professional English: These functions define the main processing flow in this file.
- SQL Density: approx_keywords=1
- Variables (sample): autoload, path, finfo, mime, toEmail, toName, subject, htmlBody, replyToEmail, replyToName, attachments, relativeDir, absDir, boundary, eml, attachment, name, content, fileName, filePath
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\payment.php`
- Meri Zubaan: Ye file **Backend core service/utility** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Backend core service/utility**.
- Basic: ext=.php, lines=147
- Logic: if=12, else=0, for=0, foreach=1, while=0, switch=0, try=0
- SQL Density: approx_keywords=8
- SQL Tables: applications, payments
- External URLs/CDNs: https://api.razorpay.com/v1/orders
- Variables (sample): _SERVER, _SESSION, applicationId, plan, _POST, errors, billingFields, field, label, v, err, db, stmt, app, feePerPerson, totalAmount, orderData, curl, response, httpCode
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\payment_verify.php`
- Meri Zubaan: Ye file **Backend core service/utility** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Backend core service/utility**.
- Basic: ext=.php, lines=131
- Logic: if=5, else=0, for=0, foreach=0, while=0, switch=0, try=1
- SQL Density: approx_keywords=17
- SQL Tables: payments, applications, error, travellers, payment_documents, system_email_logs
- Variables (sample): _SERVER, _SESSION, applicationId, orderId, _POST, paymentId, signature, expectedSignature, db, stmt, e, pmt, amount, currency, amountPaise, reference, plan, stmt2, travellers, docs
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\send_email.php`
- Meri Zubaan: Ye file **Backend core service/utility** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Backend core service/utility**.
- Basic: ext=.php, lines=271
- Logic: if=3, else=0, for=0, foreach=2, while=0, switch=0, try=0
- Functions/Methods: ensureSystemEmailLogTable, logSystemEmail, mailEsc, buildResponsiveEmailHtml, sendFormSubmittedEmail, sendPaymentConfirmationEmail
- Meri Zubaan: Ye functions file ki core processing flow define karte hain.
- Professional English: These functions define the main processing flow in this file.
- HTML/UI: forms=0, tables=4, inputs=0, selects=0, scripts=0, links=1, divs=3
- SQL Density: approx_keywords=6
- SQL Tables: system_email_logs, by, on
- Variables (sample): db, applicationId, reference, emailType, recipientEmail, subject, sent, error, attachmentPath, stmt, value, summaryRows, nextSteps, preheader, headline, greetingName, introLine, accentColor, ctaLabel, ctaUrl
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `backend\validate.php`
- Meri Zubaan: Ye file **Backend core service/utility** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Backend core service/utility**.
- Basic: ext=.php, lines=224
- Logic: if=61, else=0, for=0, foreach=1, while=0, switch=0, try=0
- Functions/Methods: validateName, validateEmail, validatePhone, validateDate, validateFutureDate, validatePastDate, validateSelect, validateRequired, validatePostalCode, validatePassportNum, validateTextarea, validateStepContact, validateStepPersonal, validateStepPassport, validateStepResidential, validateStepBackground, validateStepDeclaration
- Meri Zubaan: Ye functions file ki core processing flow define karte hain.
- Professional English: These functions define the main processing flow in this file.
- SQL Density: approx_keywords=4
- Variables (sample): v, label, clean, d, e, min, err, noJob, occ, q, details
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `composer.json`
- Meri Zubaan: Ye file **General support/resource file** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **General support/resource file**.
- Basic: ext=.json, lines=6
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `composer.lock`
- Meri Zubaan: Ye file **General support/resource file** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **General support/resource file**.
- Basic: ext=.lock, lines=102
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- Classes: for
- External URLs/CDNs: https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies, https://github.com/PHPMailer/PHPMailer.git, https://api.github.com/repos/PHPMailer/PHPMailer/zipball/ebf1655bd5b99b3f97e1a3ec0a69e5f4cd7ea088, https://packagist.org/downloads/, https://github.com/PHPMailer/PHPMailer/issues, https://github.com/PHPMailer/PHPMailer/tree/v7.0.2, https://github.com/Synchro
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `docs\BILINGUAL_CODEMAP.md`
- Meri Zubaan: Ye file **General support/resource file** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **General support/resource file**.
- Basic: ext=.md, lines=348
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `docs\BILINGUAL_DEEP_GUIDE.md`
- Meri Zubaan: Ye file **General support/resource file** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **General support/resource file**.
- Basic: ext=.md, lines=586
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `docs\BILINGUAL_FULL_PROJECT_GUIDE.md`
- Meri Zubaan: Ye file **General support/resource file** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **General support/resource file**.
- Basic: ext=.md, lines=773
- Logic: if=0, else=64, for=0, foreach=0, while=0, switch=0, try=0
- External URLs/CDNs: https://images.unsplash.com/photo-1517935706615-2717063c2225?auto=format&fit=crop&w=1200&q=80,, https://images.unsplash.com/photo-1528127269322-539801943592?auto=format&fit=crop&w=1200&q=80,, https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=1200&q=80, http://www.w3.org/2000/svg, https://base.merchantwarrior.com/post/,, https://securetest.merchantwarrior.com/payframe/payframe.js,, https://securetest.merchantwarrior.com/payframe/,, http://localhost/dcForm, https://api.razorpay.com/v1/orders, https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies,, https://github.com/PHPMailer/PHPMailer.git,, https://api.github.com/repos/PHPMailer/PHPMailer/zipball/ebf1655bd5b99b3f97e1a3ec0a69e5f4cd7ea088,
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `form.php`
- Meri Zubaan: Ye file **General support/resource file** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **General support/resource file**.
- Basic: ext=.php, lines=4
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `form-access.php`
- Meri Zubaan: Ye file **General support/resource file** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **General support/resource file**.
- Basic: ext=.php, lines=4
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `form-canada.php`
- Meri Zubaan: Ye file **General support/resource file** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **General support/resource file**.
- Basic: ext=.php, lines=4
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `form-uk.php`
- Meri Zubaan: Ye file **General support/resource file** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **General support/resource file**.
- Basic: ext=.php, lines=4
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `form-vietnam.php`
- Meri Zubaan: Ye file **General support/resource file** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **General support/resource file**.
- Basic: ext=.php, lines=4
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `index.php`
- Meri Zubaan: Ye file **General support/resource file** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **General support/resource file**.
- Basic: ext=.php, lines=14
- Logic: if=1, else=0, for=0, foreach=0, while=0, switch=0, try=0
- Variables (sample): _SESSION
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `pages\form.php`
- Meri Zubaan: Ye file **Frontend page template/controller** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Frontend page template/controller**.
- Basic: ext=.php, lines=1597
- Logic: if=56, else=6, for=1, foreach=10, while=0, switch=0, try=2
- Functions/Methods: radioSvg, countryOpts, selectMode, handleOccupationChange, sdcInit, render, selectItem, filter, loadStatesForCountry, resolveCountryIdFromInput, resolveCountryIdByInput, loadEmployerStates, loadEmployerCities, loadBirthCities, loadBillingStates, loadBillingCities
- Meri Zubaan: Ye functions file ki core processing flow define karte hain.
- Professional English: These functions define the main processing flow in this file.
- HTML/UI: forms=1, tables=0, inputs=78, selects=9, scripts=10, links=11, divs=252
- SQL Density: approx_keywords=82
- SQL Tables: countries, visit_purposes, occupations, job_titles, list, Details, PHP, JS, hidden
- External URLs/CDNs: https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css, https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css, https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css, https://pro.fontawesome.com/releases/v5.10.0/css/all.css, https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap, https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js, https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js, https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js, https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js, https://checkout.razorpay.com/v1/checkout.js, https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/utils.js
- Variables (sample): allowedCountries, forcedCountry, requestedCountry, _GET, formCountry, formContainerId, formDisplayTitle, _SESSION, envName, isLocalEnv, _SERVER, devStartCard, dev, db, countries, nationalities, purposes, occupations, e, jobTitles
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `pages\form-access.php`
- Meri Zubaan: Ye file **Frontend page template/controller** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Frontend page template/controller**.
- Basic: ext=.php, lines=66
- Logic: if=2, else=0, for=0, foreach=0, while=0, switch=0, try=0
- HTML/UI: forms=0, tables=0, inputs=0, selects=0, scripts=0, links=1, divs=1
- SQL Density: approx_keywords=5
- SQL Tables: form_access_tokens, travellers, applications
- Variables (sample): token, _GET, db, stmt, row, country, formPathMap, formPath
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `pages\form-canada.php`
- Meri Zubaan: Ye file **Frontend page template/controller** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Frontend page template/controller**.
- Basic: ext=.php, lines=5
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- Constants: FORM_COUNTRY
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `pages\form-uk.php`
- Meri Zubaan: Ye file **Frontend page template/controller** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Frontend page template/controller**.
- Basic: ext=.php, lines=5
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- Constants: FORM_COUNTRY
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `pages\form-vietnam.php`
- Meri Zubaan: Ye file **Frontend page template/controller** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Frontend page template/controller**.
- Basic: ext=.php, lines=5
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- Constants: FORM_COUNTRY
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `pages\thank-you.php`
- Meri Zubaan: Ye file **Frontend page template/controller** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **Frontend page template/controller**.
- Basic: ext=.php, lines=154
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- HTML/UI: forms=0, tables=0, inputs=0, selects=0, scripts=0, links=1, divs=12
- External URLs/CDNs: https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css, https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css, https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap
- Variables (sample): reference, _GET
- Meri Zubaan: In variables ke naam se file ka data model aur state flow samajh aata hai.
- Professional English: Variable names expose the local data model and state flow.
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `READ.md`
- Meri Zubaan: Ye file **General support/resource file** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **General support/resource file**.
- Basic: ext=.md, lines=364
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- External URLs/CDNs: https://yourdomain.com`, http://localhost/dcForm/..., https://yourdomain.com, https://yourdomain.com/dcForm, https://yourdomain.com/form.php?country=Canada, https://yourdomain.com/form.php?country=Vietnam, https://yourdomain.com/form.php?country=UK
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

## `thank-you.php`
- Meri Zubaan: Ye file **General support/resource file** ke tor par kaam karti hai.
- Professional English: This file primarily acts as **General support/resource file**.
- Basic: ext=.php, lines=4
- Logic: if=0, else=0, for=0, foreach=0, while=0, switch=0, try=0
- Meri Zubaan: Is file me change karte waqt pehle data validation, role permission aur DB side effects check karein.
- Professional English: Before modifying this file, verify input validation, authorization boundaries, and database side effects.

