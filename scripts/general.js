// generic JS fixes

// various JavaScript object.
var civiomg = {};

// jump to the value in a select drop down
civiomg.go = function(e) {
  var destination = e.options[e.selectedIndex].value;
  if (destination && destination != 0) location.href = destination;
};

