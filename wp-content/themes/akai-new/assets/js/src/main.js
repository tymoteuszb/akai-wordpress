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
    }
  });

  window.changeHeader = function() {
    document.querySelector('.site-header').classList.toggle('big');

    return false;
  };
 } )( this );
