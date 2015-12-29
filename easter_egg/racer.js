/**
 * Implements the cheet.js library to listen to key commands for 
 * a pattern to trigger an action
 */

cheet('↑ ↑ ↓ ↓ ← → ← → b a', function () {
	alert('You Cheeky Bastard');
	var racer = new Audio('/easter_egg/Queen-Bicycle-Race.mp3');
	racer.play();
});
