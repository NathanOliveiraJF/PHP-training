Autoloading is Php's way automatically find classes and their corresponding files without having to require all of them manually

## PSR-4: Autoloader

This PSR describes a especification for autoloading classes from file paths. Also describes where to place files that will be autoloaded according to the specification.

## specification

1. A fully qualified class name has the following form:

``
\<NamespaceName>(\<SubNameSpaceName>)*\<ClassName>

``
2. The fully qualified class name MUST have a top-level namespace name, also known as a "vendor namespace".
3. The fully qualified class name MAY have one or more sub-namespace names. 

``
\<NamespaceName>(\<SubNameSpaceName>)(\<SubNameSpaceName>)*\<ClassName>

``
4. The fully qualified class name MUST have terminating class name.
