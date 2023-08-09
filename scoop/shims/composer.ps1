# C:\Users\asus\scoop\apps\composer\current\composer.ps1
$path = Join-Path $PSScriptRoot "..\apps\composer\current\composer.ps1"
if ($MyInvocation.ExpectingInput) { $input | & $path  @args } else { & $path  @args }
exit $LASTEXITCODE
