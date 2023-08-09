if ($args.length -eq 1 -and ($args -eq "selfupdate" -or $args -eq "self-update")) { & scoop update composer }
else { & php (Join-Path $PSScriptRoot "composer.phar") @args }
