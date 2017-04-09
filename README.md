# yii2-touchswipe

TouchSwipe Jquery Plugin


TouchSwipe 1.6

A jQuery plugin to be used on touch devices such as iPad, iPhone, Android etc.

Detects single and multiple finger swipes, pinches and falls back to mouse 'drags' on the desktop.

Time and distance thresholds can be set to distinguish between swipe gesture and slow drag.

configuration.

    Detects swipes in 4 directions, "up", "down", "left" and "right"
    Detects pinches "in" and "out"
    Supports single finger or double finger touch events
    Supports click events both on the touchSwipe object and its child objects
    Definable threshold / maxTimeThreshold to determin when a gesture is actually a swipe
    Events triggered for swipe "start","move","end" and "cancel"
    End event can be triggered either on touch release, or as soon as threshold is met
    Allows swiping and page scrolling
    Disables user input elements (Button, form, text etc) from triggering swipes
