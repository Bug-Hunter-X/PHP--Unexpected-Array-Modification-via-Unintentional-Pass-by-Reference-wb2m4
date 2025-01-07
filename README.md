# PHP: Subtle Array Modification Bug

This repository demonstrates a common, yet subtle, bug in PHP related to array references and unintended side effects.

The `bug.php` file contains code that showcases how modifications made to an array via a reference can unexpectedly affect other parts of the code if not carefully handled. The `bugSolution.php` file provides a fix using techniques like creating copies of the arrays before modification to prevent unintended changes.

This is a helpful example for understanding how references work in PHP and how to avoid subtle bugs.

## How to run

1.  Clone this repository
2.  Run `php bug.php` to see the original problematic behaviour
3.  Run `php bugSolution.php` to see the corrected behaviour