-- SUMMARY --

Unicode module convertes unicode characters to html entities so that drupal may
store them correctly.

PHP Libraries are already included under the vendor directory.

-- Requirements --
Entity API Module

-- INSTALLATION --
Simply enable the module and go to admin->config->content authoring->unicode
and choose which entities should be checked.

-- SECURITY CONCERN --

There should be no security concern as this escapes unicode characters to
html entities only.

-- TROUBLE SHOOTING --

This does sadly not work with node title...
