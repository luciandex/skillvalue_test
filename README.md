# skillvalue_test
a SkillValue.com test competition - LordOfTheCode

Two arrays was given:
'10:00 14:00 10:00 15:00 10:00 13:00';
'17:00 22:00 14:00 21:00 17:00 22:00';

Find the number of interval hours when the number of intersections is maximum.

For example:

The first interval start at 10:00 and end at 17:00 (the true interval is 10:00 - 16:00).

The second interval start at 14:00 and end at 22:00 (the true interval is 14:00 - 21:00).

…………

…………

The sixth interval start at 13:00 and end at 22:00 (the true interval is 13:00 - 21:00).

The maximum number of intersections at a time is 5 and this maximum is reached for 2 hours => output: 2


 
Try the following arrays to test your code:

(1)
array('10:00 15:00 20:00','15:00 20:00 23:00');

'10:00 15:00 20:00',

'15:00 20:00 23:00'

EXPECTED RESULT = 13

(2)
array('10:00 17:00 11:00 14:00 12:00 13:00 17:00 12:00 10:00','15:00 21:00 14:00 19:00 17:00 19:00 22:00 18:00 13:00');

'10:00 17:00 11:00 14:00 12:00 13:00 17:00 12:00 10:00',

'15:00 21:00 14:00 19:00 17:00 19:00 22:00 18:00 13:00'

EXPECTED RESULT = 4

(3)
array('10:00 14:00 10:00 15:00 10:00 13:00','17:00 22:00 14:00 21:00 17:00 22:00');

'10:00 14:00 10:00 15:00 10:00 13:00',

'17:00 22:00 14:00 21:00 17:00 22:00'

EXPECTED RESULT = 2

(4)
array('10:00 15:00 10:00','17:00 22:00 16:00');

'10:00 15:00 10:00',

'17:00 22:00 16:00'

EXPECTED RESULT = 1

(5)
array('10:00 18:00 11:00 14:00 10:00 14:00 16:00','15:00 22:00 16:00 19:00 14:00 19:00 22:00');

'10:00 18:00 11:00 14:00 10:00 14:00 16:00',

'15:00 22:00 16:00 19:00 14:00 19:00 22:00'

EXPECTED RESULT = 2

