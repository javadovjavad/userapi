# userapi

Small PHP + MySQL endpoint that looks up a user by name. I mostly use it as a
playground for a Jenkins pipeline that runs gitleaks against the repo.

## Running it

Needs PHP 7.4+ with mysqli and a MySQL/MariaDB server.

```
php install.php          # creates the `users` db and seeds it
php -S localhost:8000
```

Then open `http://localhost:8000/?name=John`.

DB credentials default to root with no password on localhost. Change them in
`config.php` or set `DB_HOST`, `DB_USER`, `DB_PASS`, `DB_NAME` as env vars.

## Jenkins

The `Jenkinsfile` runs gitleaks in the `zricethezav/gitleaks` container.
`secret-test.php` has a fake password in it on purpose so the scan has
something to catch. Don't "fix" it.
