php-test:
	vendor/bin/phpunit  test/Api
phpstan:
	vendor/bin/phpstan analyse lib --level 7
php:
	rm -rf docs && \
	rm -rf lib/Model && \
	rm -rf lib/Api && \
	docker run --rm \
	-v ${PWD}:/local openapitools/openapi-generator-cli:v7.5.0 generate \
		-i https://raw.githubusercontent.com/digitalfemsa/openapi/main/_build/api.yaml \
		-g php \
		-o /local \
		-c /local/config-php.json \
		--global-property modelTests=false



version-update:
	@if [ -z "$(NEW_VERSION)" ]; then \
		echo "Error: NEW_VERSION is required. Usage: make version-update NEW_VERSION=1.0.6"; \
		exit 1; \
	fi
	@echo "Updating version to $(NEW_VERSION)..."
	@echo "$(NEW_VERSION)" > VERSION
	@sed -i '' 's/"version": "[^"]*"/"version": "$(NEW_VERSION)"/' composer.json
	@sed -i '' "s/Femsa\/v2 PhpBindings\/[0-9.]*/Femsa\/v2 PhpBindings\/$(NEW_VERSION)/" lib/Configuration.php
	@sed -i '' 's/SDK Package Version: [^\n]*/SDK Package Version: $(NEW_VERSION)'\'' . PHP_EOL;/' lib/Configuration.php
	@sed -i '' 's/"artifactVersion": "[^"]*"/"artifactVersion": "$(NEW_VERSION)"/' config-php.json
	@sed -i '' "s/\"httpUserAgent\": \"Femsa\/v2 PhpBindings\/[0-9.]*\"/\"httpUserAgent\": \"Femsa\/v2 PhpBindings\/$(NEW_VERSION)\"/" config-php.json
	@sed -i '' "s/'bindings_version' => \"[^\"]*\"/'bindings_version' => \"$(NEW_VERSION)\"/" lib/HeaderSelector.php
	@sed -i '' 's/Package version: `[^"]*`/Package version: `$(NEW_VERSION)`/' README.md
	@echo "Version updated successfully to $(NEW_VERSION)"

