/**
 * AKAI New
 * http://akai.org.pl
 *
 * Copyright (c) 2014 AKAI
 * Licensed under the GPLv2+ license.
 */
 
 ( function( window, undefined ) {
	'use strict';

  var s = skrollr.init({
    constants: {
      smallheaderthird: 140 / 3,
      smallheaderhalf: 140 / 2,
      smallheader: 140
    },
    forceHeight: false
  });

  var menu = document.querySelector('.navigation-bar');
  var menuToggleButton = document.querySelector('.navigation-bar .js-expand');

  var toggleMenu = function(e) {
    e.preventDefault();
    menu.classList.toggle('expanded');
  };

  menuToggleButton.addEventListener('click', toggleMenu);
  menuToggleButton.addEventListener('touchend', toggleMenu);

 } )( this );
