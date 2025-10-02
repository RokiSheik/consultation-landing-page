# Campaign landing page — focused docs

This README documents the two primary files used by the live landing page: `index.php` (front-end page) and `submit-form.php` (server-side form handler). It explains what each file does, how they interact, and important security/deployment notes.

## `index.php` — landing page and form

- Fetches page content from a remote API (the file uses cURL to request JSON from an API endpoint) and renders the landing page dynamically using the returned data (title, bullets, image/video, etc.).
- Includes the full front-end HTML, styling, and third-party tracking scripts (Google Tag Manager, Clarity, analytics, CSS/JS assets loaded from CDNs).
- Displays the consultation/registration form that posts to `submit-form.php` (the form contains visible fields and hidden fields such as `landing_title` and `offer_price`).
- Important behavior:
	- The page relies on the external API being available; if the API returns a non-200 status the script currently exits with an error message.
	- Front-end assets are loaded from external CDNs and a remote stylesheet, so network availability affects rendering.

## `submit-form.php` — server-side form handler

- Collects POSTed form data, sanitizes values with basic HTML escaping, and forwards the payload as JSON to an external Laravel API endpoint (using cURL).
- Handles the API response. Typical behavior observed in the code:
	- If the API returns a `payment_url` and indicates success, the script redirects the visitor to that URL (used for payment or next-step flows).
	- On error the script shows an alert and sends the user back in history.
- Notes about persistence and integrations:
	- The script is a proxy to a remote API — it does not persist leads locally in the code paths we reviewed (the API is the authoritative sink).
	- Some variants of the project include a `leads.php` that reads directly from a local MySQL database. In this repo `submit-form.php` calls the remote API; verify if you intend to store leads locally or let the remote API handle storage.

## Security & production notes (short)

- Always perform rigorous server-side validation and stronger sanitization than simple HTML escaping. Treat all POST data as untrusted.
- Add CSRF tokens to the form and validate them in `submit-form.php` before forwarding data to the API.
- Avoid echoing raw API error messages to users; log errors server-side and show friendly messages instead.
- If you plan to keep `leads.php` or any admin/export endpoints on the server, protect them with authentication and restrict by IP.
- Remove editable credentials from committed files. If you need database credentials, use environment variables or a protected configuration file outside the web root.

## Quick deployment checklist

1. Place the files under a PHP-enabled webserver (Apache/Nginx + PHP-FPM). PHP 7.4+ recommended.
2. Ensure the server can make outbound HTTPS requests (cURL) to the configured API endpoints.
3. Secure the site with HTTPS and restrict access to admin pages.
4. Test the full flow: open `index.php`, submit the form, and verify the redirect/response from the remote API.

If you'd like, I can now harden `submit-form.php` (add CSRF protection and improved input validation), or trim out unused admin/backup files from the public doc root. Tell me which you'd prefer and I'll create a short plan and implement it.


# Campaign / Consultation Landing Page

A small PHP-based landing page for collecting consultation sign-ups and managing lead submissions.

This repository contains a minimal, self-contained set of PHP files that implement a landing page form, server-side form handling, a thank-you page, and simple lead management/backups. It's intended to be deployed on a standard LAMP/LEMP stack.

## What it does

- Presents a landing page (index.php) with a form for visitors to request a consultation or sign up for the campaign.
- Handles form submissions in `submit-form.php` and redirects users to `thanks.php` after a successful submission.
- Provides a simple lead listing/management page (`leads.php`) and backup utilities (`backup.php`, `backup-submit-form.php`) to export or archive submissions.

## Files

- `index.php` — Landing page and form.
- `submit-form.php` — Server-side form handler.
- `thanks.php` — Confirmation/thank-you page after submit.
- `leads.php` — Simple lead listing or admin view (protect this file on production).
- `backup.php`, `backup-submit-form.php` — Scripts to create backups or export stored submissions.

## Deployment / Quickstart

1. Copy the repository files to your web server document root (for example: `/var/www/html/your-site`).
2. Ensure PHP is installed and configured (PHP 7.4+ recommended).
3. Adjust file and directory permissions so the PHP process can write to the directory used for storing submissions/backups (if the app uses file storage).
4. Protect administrative pages (like `leads.php`) behind authentication or IP restrictions before going to production.
5. Open the site in a browser and test the form end-to-end.

Note: The exact storage method (flat files, CSV, or a database) depends on repository configuration. Inspect `submit-form.php` to confirm how submissions are persisted and update configuration accordingly.

## Security & maintenance notes

- Validate and sanitize all user inputs server-side. Do not rely on client-side validation only.
- Add CSRF protection to form handlers if used in production.
- Secure `leads.php` and any backup/export scripts with authentication and restrict access to trusted IPs.
- Remove or secure backup scripts on production servers to avoid accidental data exposure.

## Next steps / Improvements

- Add authentication for admin pages.
- Move lead storage to a database for reliability (MySQL/Postgres) and add prepared statements.
- Add automated tests and basic logging for form submissions.

---

If you'd like, I can open `submit-form.php` and add notes or harden the form handling (input sanitization, CSRF token, or database migration). Tell me which improvements you'd like to prioritize.
