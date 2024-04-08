# Extending https://github.com/devcontainers/images/blob/main/src/php
FROM "mcr.microsoft.com/devcontainers/php:1-8.2-bullseye"

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

# Add php intl extension
RUN install-php-extensions intl
