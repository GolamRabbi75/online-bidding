<?php
   include 'includes/header.php';
  ?>


<style>
  
  html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}

article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
  display: block;
}

body {
  line-height: 1;
}

ol, ul {
  list-style: none;
}

blockquote, q {
  quotes: none;
}

blockquote:before, blockquote:after,
q:before, q:after {
  content: '';
  content: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

.about {
  margin: 70px auto 40px;
  padding: 8px;
  width: 260px;
  font: 10px/18px 'Lucida Grande', Arial, sans-serif;
  color: #bbb;
  text-align: center;
  text-shadow: 0 -1px rgba(0, 0, 0, 0.3);
  background: #383838;
  background: rgba(34, 34, 34, 0.8);
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3));
  background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3));
  background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3));
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3));
  -webkit-box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.2), 0 0 6px rgba(0, 0, 0, 0.4);
  box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.2), 0 0 6px rgba(0, 0, 0, 0.4);
}
.about a {
  color: #eee;
  text-decoration: none;
  border-radius: 2px;
  -webkit-transition: background 0.1s;
  -moz-transition: background 0.1s;
  -o-transition: background 0.1s;
  transition: background 0.1s;
}
.about a:hover {
  text-decoration: none;
  background: #555;
  background: rgba(255, 255, 255, 0.15);
}

.about-links {
  height: 30px;
}
.about-links > a {
  float: left;
  width: 50%;
  line-height: 30px;
  font-size: 12px;
}

.about-author {
  margin-top: 5px;
}
.about-author > a {
  padding: 1px 3px;
  margin: 0 -1px;
}

/*
 * Copyright (c) 2013 Thibaut Courouble
 * http://www.cssflow.com
 *
 * Licensed under the MIT License:
 * https://www.opensource.org/licenses/mit-license.php
 */
body {
  font: 13px/20px 'Lucida Grande', Verdana, sans-serif;
  color: #404040;
  background: #f8f9fa;
}

.checkout {
  width: 445px;
  margin: 50px auto;
  padding: 15px;
  background: #f3f6fa;
  border: 1px solid;
  border-color: #c2cadb #bbc5d6 #b7c0cd;
  border-radius: 7px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
}
.checkout > p {
  zoom: 1;
}
.checkout > p:before, .checkout > p:after {
  content: '';
  display: table;
}
.checkout > p:after {
  clear: both;
}
.checkout > p + p {
  margin-top: 15px;
}

.checkout-header {
  position: relative;
  margin: -15px -15px 15px;
}

.checkout-title {
  padding: 0 15px;
  line-height: 38px;
  font-size: 13px;
  font-weight: bold;
  color: #7f889e;
  text-shadow: 0 1px rgba(255, 255, 255, 0.7);
  background: #eceff5;
  border-bottom: 1px solid #c5ccdb;
  border-radius: 7px 7px 0 0;
  background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
  background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
  background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
  background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
  -webkit-box-shadow: inset 0 1px white;
  box-shadow: inset 0 1px white;
}
.checkout-title:before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 2px;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.08);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.08);
}

.checkout-price {
  position: absolute;
  top: -14px;
  right: -14px;
  width: 40px;
  font: 14px/40px Helvetica, Arial, sans-serif;
  color: white;
  text-align: center;
  text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.3);
  text-indent: -1px;
  letter-spacing: -1px;
  background: #e54930;
  border: 1px solid;
  border-color: #b33323 #ab3123 #982b1f;
  border-radius: 21px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-image: -webkit-linear-gradient(top, #f75a3b, #d63b29);
  background-image: -moz-linear-gradient(top, #f75a3b, #d63b29);
  background-image: -o-linear-gradient(top, #f75a3b, #d63b29);
  background-image: linear-gradient(to bottom, #f75a3b, #d63b29);
  -webkit-box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.3), 0 1px 2px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.3), 0 1px 2px rgba(0, 0, 0, 0.2);
}
.checkout-price:before {
  content: '';
  position: absolute;
  top: 3px;
  bottom: 3px;
  left: 3px;
  right: 3px;
  border: 2px solid #f5f8fb;
  border-radius: 18px;
  -webkit-box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.2), inset 0 -1px 1px rgba(0, 0, 0, 0.25), 0 -1px 1px rgba(0, 0, 0, 0.25);
  box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.2), inset 0 -1px 1px rgba(0, 0, 0, 0.25), 0 -1px 1px rgba(0, 0, 0, 0.25);
}

input {
  margin: 0;
  line-height: normal;
  font-family: inherit;
  font-size: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.checkout-input {
  float: left;
  padding: 0 7px;
  height: 32px;
  color: #525864;
  background: white;
  border: 1px solid;
  border-color: #b3c0e2 #bcc5e2 #c0ccea;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #f6f8fa, white);
  background-image: -moz-linear-gradient(top, #f6f8fa, white);
  background-image: -o-linear-gradient(top, #f6f8fa, white);
  background-image: linear-gradient(to bottom, #f6f8fa, white);
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
}
.checkout-input:focus {
  border-color: #46aefe;
  outline: none;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 5px #46aefe;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 5px #46aefe;
}
.lt-ie9 .checkout-input {
  line-height: 30px;
}

.checkout-name {
  width: 150px;
}

.checkout-card {
  width: 210px;
}

.checkout-exp,
.checkout-cvc {
  margin-left: 15px;
  width: 116px;
}

.checkout-btn {
  width: 100%;
  height: 34px;
  padding: 0;
  font-weight: bold;
  color: white;
  text-align: center;
  text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
  border: 1px solid;
  border-color: #1486f9 #0f7de9 #0d6acf;
  background: #1993fb;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
  background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
  background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
  background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
}
.checkout-btn:active {
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  border-color: #075bba #0c69d2 #0f7de9;
  background-image: -webkit-linear-gradient(top, #1281dc, #1593fc);
  background-image: -moz-linear-gradient(top, #1281dc, #1593fc);
  background-image: -o-linear-gradient(top, #1281dc, #1593fc);
  background-image: linear-gradient(to bottom, #1281dc, #1593fc);
  -webkit-box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
  box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
}

:-moz-placeholder {
  color: #acb6c8 !important;
}

::-moz-placeholder {
  color: #acb6c8 !important;
  opacity: 1;
}

::-webkit-input-placeholder {
  color: #acb6c8;
}

:-ms-input-placeholder {
  color: #acb6c8;
}

::-moz-focus-inner {
  padding: 0 !important;
  border: 0 !important;
}
</style>







<form class="checkout">
    <div class="checkout-header">
      <h1 class="checkout-title">
        Checkout
        <span class="checkout-price">$$</span>
      </h1>
    </div>
    <p>
      <input type="text" class="checkout-input checkout-name" placeholder="Your name on card">
      <input type="text" class="checkout-input checkout-exp" placeholder="Expiry Month">
      <input type="text" class="checkout-input checkout-exp" placeholder="Expiry Year">
    </p>
    <p>
      <input type="text" class="checkout-input checkout-card" placeholder="Your card number">
      <input type="text" class="checkout-input checkout-cvc" placeholder="Security Code">
    </p>
    <p>
      <input type="submit" value="Pay Bill" class="checkout-btn">
    </p>
  </form>