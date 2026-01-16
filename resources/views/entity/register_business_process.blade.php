<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Create Entity Account</title>

 @include('template.auth_page_cssLink')


    <!------------------------Country flag dropdown css------------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/login_register.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select-country.min.css') }}">

    <!----------------------------------- add for date picker box---------------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css">
  <style>



  ._btn_div {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
}
._btn_div button{
    margin:0px 10px;
}
  ._btn_default {
    margin: 0px;
    appearance: none;
    user-select: none;
    cursor: pointer;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    box-sizing: border-box;
    font-family: inherit;
    font-weight: 500;
    text-align: center;
    text-decoration: none;
    outline: none;
    line-height: 20px;
    word-break: keep-all;
    color: rgb(30, 35, 41);
    border-radius: 4px;
    min-height: 24px;
    border: none;
    background-color: rgb(234, 236, 239);
    pointer-events: initial;
    font-size: 16px;
    padding: 14px 0px;
    min-width: 128px;
    width: 128px;
}

._btn_theme.inactive {
    background-color: rgb(252, 213, 53);
    opacity: 0.3;
    color: rgb(24, 26, 32);
    cursor: not-allowed;
}
._btn_theme {
    margin: 0px;
    appearance: none;
    user-select: none;
    cursor: pointer;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    box-sizing: border-box;
    font-family: inherit;
    font-weight: 500;
    text-align: center;
    text-decoration: none;
    outline: none;
    line-height: 20px;
    word-break: keep-all;
    color: rgb(24, 26, 32);
    border-radius: 4px;
    min-height: 24px;
    border: none;
    background-image: none;
    background-color: rgb(252, 213, 53);
    pointer-events: initial;
    font-size: 16px;
    padding: 14px 54px;
    min-width: 164px;
    width: 282px;
}
a{
    color:black;
    text-decoration:none;
}



.inner_right_box {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    padding: 32px 24px;
    flex: 1 1 0%;
    -webkit-box-pack: center;
    justify-content: center;
}
._subtitle {
    box-sizing: border-box;
    margin: 8px 0px 32px;
    min-width: 0px;
    font-weight: 500;
    font-size: 14px;
    line-height: 20px;
    color: rgb(112, 122, 138);
}
.inner_right_box {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    padding: 32px 24px;
    flex: 1 1 0%;
    -webkit-box-pack: center;
    justify-content: center;
}
.inner_right_box {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    padding: 32px 24px;
    flex: 1 1 0%;
    -webkit-box-pack: center;
    justify-content: center;
}

._des_box {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
}

._title {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    font-weight: 600;
    font-size: 32px;
    line-height: 40px;
    color: rgb(30, 35, 41);
}

._des_list_box {
    box-sizing: border-box;
    margin: 16px 0px 0px;
    min-width: 0px;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
}
._div_box {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
}
._svg_icon {
    box-sizing: border-box;
    margin: 0px 8px 0px 0px;
    color: rgb(183, 189, 198);
    font-size: 24px;
    fill: rgb(183, 189, 198);
    width: 1em;
    height: 1em;
    min-width: 24px;
}
._des {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    font-weight: 400 !important;
    font-size: 16px;
    line-height: 24px;
    color: rgb(30, 35, 41);
}

._right_inner_main {
    box-sizing: border-box;
    margin: 30px 0px 0px;
    min-width: 0px;
    display: flex;
    width: 434px;
    min-height: 580px;
    flex-direction: column;
}
._title {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    font-weight: 600;
    font-size: 32px;
    line-height: 40px;
    color: rgb(30, 35, 41);
}

._right_main_content {
    box-sizing: border-box;
    margin: 40px 0px 0px;
    min-width: 0px;
    flex: 1 1 0%;
}
.main_content_inner {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    flex-direction: column;
    -webkit-box-pack: justify;
    justify-content: space-between;
    height: 100%;
    padding-bottom: 0px;
}
._mb-16px {
    box-sizing: border-box;
    margin: 0px 0px 16px;
    min-width: 0px;
}
._mb-16px {
    box-sizing: border-box;
    margin: 0px 0px 16px;
    min-width: 0px;
}
.legal_txt {
    box-sizing: border-box;
    margin: 8px 0px 0px;
    min-width: 0px;
    font-weight: 400;
    font-size: 12px;
    line-height: 16px;
    cursor: pointer;
    color: rgb(201, 148, 0);
    display: inline-block;
    text-decoration: underline;
}



._mb-40px {
    box-sizing: border-box;
    margin: 0px 0px 40px;
    min-width: 0px;
}
._border_box {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    width: 100%;
}
._des_heading {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    font-weight: 500;
    font-size: 16px;
    line-height: 24px;
    color: rgb(30, 35, 41);
}
.verify_btn.inactive {
    background-color: rgb(252, 213, 53);
    opacity: 0.3;
    color: rgb(24, 26, 32);
    cursor: not-allowed;
}
.verify_btn {
    margin: 0px 8px 0px 0px;
    appearance: none;
    user-select: none;
    cursor: pointer;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    box-sizing: border-box;
    font-family: inherit;
    font-weight: 500;
    text-align: center;
    text-decoration: none;
    outline: none;
    line-height: 20px;
    word-break: keep-all;
    color: rgb(24, 26, 32);
    border-radius: 4px;
    min-height: 24px;
    border: none;
    background-image: none;
    background-color: rgb(252, 213, 53);
    pointer-events: initial;
    font-size: 16px;
    padding: 14px 54px;
    width: 100%;
    min-width: 164px;
}
.main_div {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    min-height: 0px;
    flex-direction: column;
}

.inner_left_box {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    background-size: cover;
    padding: 32px 24px;
    flex: 1 1 0%;
    flex-direction: column;
    -webkit-box-align: center;
    align-items: center;
}
.left_inner {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    align-self: flex-end;
    width: 434px;
}
._div_box {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
}
._des_info_title {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    font-weight: 600;
    font-size: 24px;
    line-height: 32px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    color: rgb(30, 35, 41);
}


._des_box {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
}

.accordion-button:not(.collapsed) {
    color: rgb(146, 154, 165);
    background-color: #3d475400;
    box-shadow: none;
}
.accordion-item {
    background-color: #fff;
    border: 1px solid rgb(0 0 0 / 0%);
}

.accordion-button:hover{
    background:whitesmoke;
}
.accordion-button {
    position: relative;
    display: flex;
    align-items: center;
    width: 100%;
    padding: 1rem 1.25rem;
    font-size: 1rem;
    color: rgb(146, 154, 165);
    text-align: left;
    background-color: #fff;
    border: 0;
    border-radius: 0;
    overflow-anchor: none;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,border-radius .15s ease;
}

/*---------------*/

@media screen and (min-width: 767px){

.inner_left_box {
    padding: 40px 24px;
    -webkit-box-align: center;
    align-items: center;
}
.main_content_inner {
    padding-bottom: 48px;
}

._right_inner_main {
    margin-left: 10%;
    margin-top: 0px;
}

.inner_right_box {
    padding: 64px 24px 32px;
    -webkit-box-pack: center;
    justify-content: center;
}
.inner_right_box {
    padding: 64px 24px 32px;
    -webkit-box-pack: center;
    justify-content: center;
}


.verify_btn {
    margin-top: 56px;
}
.verify_btn {
    margin: 0px;
    appearance: none;
    user-select: none;
    cursor: pointer;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    box-sizing: border-box;
    font-family: inherit;
    text-align: center;
    text-decoration: none;
    outline: none;
    padding: 12px;
    line-height: 20px;
    min-width: 52px;
    word-break: keep-all;
    color: rgb(24, 26, 32);
    border-radius: 4px;
    min-height: 24px;
    border: none;
    background-image: none;
    background-color: rgb(252, 213, 53);
    width: 100%;
    font-size: 16px;
    font-weight: 500;
}
.inner_right_box {
    padding: 64px 24px 32px;
    -webkit-box-pack: center;
    justify-content: center;
}
._subtitle {
    margin-top: 8px;
    margin-bottom: 32px;
}
.main_div {
    min-height: 836px;
    flex-direction: column;
}

}

@media screen and (min-width: 1023px){

.inner_right_box {
    padding: 64px 0px 32px;
    -webkit-box-pack: start;
    justify-content: flex-end;
}
._subtitle {
    margin-top: 32px;
    margin-bottom: 0px;
}
.verify_btn {
    margin-top: 116px;
}
.main_div {
    flex-direction: row;
}
}

.bootstrap-select>.dropdown-toggle{
     height: calc(3.5rem + 2px);
    line-height: 1.25;
    border: 1px solid #ced4da;
    text-align:left;
    padding: 1rem 0.75rem;
    font-size:16px;
}

.country_dis {
    box-sizing: border-box;
    margin: 24px 0px 0px;
    min-width: 0px;
    display: flex;
    color: rgb(30, 35, 41);
    -webkit-box-align: center;
    align-items: center;
}
.icon_list {
    box-sizing: border-box;
    margin: 0px 8px 0px 0px;
    min-width: 0px;
    color: rgb(146, 154, 165);
    font-size: 24px;
    fill: rgb(146, 154, 165);
    width: 1em;
    height: 1em;
    vertical-align: middle;
    padding-bottom: 2px;
}
.flag {
    box-sizing: border-box;
    margin: 0px 8px 0px 0px;
    min-width: 0px;
    max-width: 100%;
    border-radius: 50%;
    flex-shrink: 0;
    width: 16px;
    height: 16px;
}
.content_dis {
    box-sizing: border-box;
    margin: 24px 0px 0px;
    min-width: 0px;
    display: flex;
    color: rgb(30, 35, 41);
}

.dis_text {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}

.spprt-box-active {
    box-sizing: border-box;
    margin: 0px 32px 0px 0px;
    min-width: 0px;
    font-weight: 400;
    font-size: 14px;
    line-height: 20px;
    display: inline-block;
    cursor: pointer;
    color: rgb(30, 35, 41);
}
.spprt-label {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    flex-direction: row;
    -webkit-box-align: center;
    align-items: center;
}
.spprt-svgicon {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: currentcolor;
    width: 16px;
    height: 16px;
    font-size: 16px;
    fill: none;
}
.spprt-svgicon-active {
    color: rgb(240, 185, 11) !important;
       fill: rgb(240, 185, 11) !important;
}
.spprt-inpt_div {
    box-sizing: border-box;
    margin: 0px 0px 0px 8px;
    min-width: 0px;
}
[hidden] {
    display: none;
}
.spprt-box {
    box-sizing: border-box;
    margin: 0px 32px 0px 0px;
    min-width: 0px;
    font-weight: 400;
    font-size: 14px;
    line-height: 20px;
    display: inline-block;
    cursor: pointer;
    color: rgb(30, 35, 41);
}
.spprt-box svg {
    color: rgb(183, 189, 198);
}

.helpmail{
    color:rgb(240, 185, 11);
    font-weight:600 !important;
}








 /*=--------------------------- */

.main-content-box {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    min-height: 0px;
    flex-direction: column;
}

.leftbox {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    background-size: cover;
    padding: 32px 24px;
    background-color: rgb(250, 250, 250);
    flex: 1 1 0%;
    flex-direction: column;
    -webkit-box-align: center;
    align-items: center;
}
.left-inner {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    width: 100%;
    height: 100%;
    flex-direction: column;
    -webkit-box-pack: justify;
    justify-content: space-between;
}
.left-footer {
    box-sizing: border-box;
    margin: 24px 0px 0px;
    min-width: 0px;
}

.footer-optn {
    box-sizing: border-box;
    margin: 0px 0px 16px;
    min-width: 0px;
    display: flex;
}
.left-svg-icon {
    box-sizing: border-box;
    margin: 0px 8px 0px 0px;
    color: rgb(146, 154, 165);
    font-size: 24px;
    fill: rgb(146, 154, 165);
    width: 1em;
    height: 1em;
    min-width: 24px}
.a-txt {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    text-decoration-line: underline;
    cursor: pointer;
    color: rgb(71, 77, 87);
}
.a-txt-innner {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    font-weight: 400;
    font-size: 14px;
    line-height: 20px;
}
.checklist {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
}
.checklist-inner {
    box-sizing: border-box;
    margin: 24px 0px 0px;
    min-width: 0px;
    display: flex;
    border-radius: 48px;
    cursor: pointer;
    padding: 12px 16px;
    background-color: rgb(254, 246, 216);
    color: rgb(201, 148, 0);
    -webkit-box-align: center;
    align-items: center;
}
.checklist-svg {
    box-sizing: border-box;
    margin: 0px 8px 0px 0px;
    min-width: 0px;
    color: currentcolor;
    fill: currentcolor;
    width: 1em;
    height: 1em;
    font-size: 24px;
}

.rightbox {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    padding: 32px 24px;
    flex: 1 1 0%;
    -webkit-box-pack: center;
    justify-content: center;
}

.right-inner {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    width: 100%;
    flex-direction: column;
    -webkit-box-pack: justify;
    justify-content: space-between;
    padding-bottom: 48px;
}
.heading-box {
    box-sizing: border-box;
    margin: 0px 0px 32px;
    min-width: 0px;
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    width: 100%;
}

.counting {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    font-weight: 500;
    font-size: 16px;
    line-height: 24px;
    color: rgb(183, 189, 198);
}
.optn-box {
    box-sizing: border-box;
    margin: 0px 0px 24px;
    min-width: 0px;
    display: flex;
    cursor: pointer;
    border-radius: 8px;
    position: relative;
    -webkit-box-align: center;
    align-items: center;
    min-height: 80px;
    padding: 16px;
    background-color: rgb(250, 250, 250);
}
.optn-box-svg {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: currentcolor;
    font-size: 24px;
    fill: currentcolor;
    width: 1em;
    height: 1em;
}
.optn-box-txt {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    flex: 1 1 0%;
    padding-left: 16px;
    padding-right: 16px;
}
.p-bold {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    font-weight: 500;
    font-size: 16px;
    line-height: 24px;
    color: rgb(30, 35, 41);
}
@media (min-width: 1200px){
.h1 {
    font-size: 2.5rem !important;
}}
.p-light {
    box-sizing: border-box;
    margin: 4px 0px 0px;
    min-width: 0px;
    font-weight: 400;
    font-size: 14px;
    line-height: 20px;
    color: rgb(112, 122, 138);
}
.optn-arrow {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: rgb(71, 77, 87);
    font-size: 24px;
    fill: rgb(71, 77, 87);
    width: 1em;
    height: 1em;
}
.optn-box:hover {
    background-color: rgb(245, 245, 245);
}
.optn-box:hover > svg:last-child {
    color: rgb(240, 185, 11);
}
.border-box {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
}
.Main_title {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
}
.Edit-box {
    box-sizing: border-box;
    margin: 0px 0px 0px 8px;
    min-width: 0px;
    display: flex;
    border-radius: 4px;
    background-color: rgb(245, 245, 245);
    width: 32px;
    height: 32px;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
}
.Edit-icon {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: rgb(146, 154, 165);
    font-size: 24px;
    fill: rgb(146, 154, 165);
    border-radius: 4px;
    width: 1em;
    height: 1em;
    vertical-align: middle;
}
.flag-img {
    box-sizing: border-box;
    margin: 0px 8px 0px 0px;
    min-width: 0px;
    max-width: 100%;
    border-radius: 50%;
    flex-shrink: 0;
    width: 16px;
    height: 16px;
}
.border-box {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
}
.opt-display {
    box-sizing: border-box;
    margin: 24px 0px 0px;
    min-width: 0px;
    display: flex;
    color: rgb(30, 35, 41);
    align-items: center;
}
.opt-display-txt {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}
.btn-main-yellow.inactive {
    background-color: rgb(252, 213, 53);
    opacity: 0.3;
    color: rgb(24, 26, 32);
    cursor: not-allowed;
}
.btn-main-yellow {
    margin: 0px;
    appearance: none;
    user-select: none;
    cursor: pointer;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    box-sizing: border-box;
    font-family: inherit;
    font-weight: 500;
    text-align: center;
    text-decoration: none;
    outline: none;
    line-height: 20px;
    word-break: keep-all;
    color: rgb(24, 26, 32);
    border-radius: 4px;
    min-height: 24px;
    border: none;
    background-image: none;
    background-color: rgb(252, 213, 53);
    pointer-events: initial;
    font-size: 16px;
    padding: 14px 54px;
    min-width: 164px;
    width: 100%;}
    .btn-inner-txt {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: inherit;
}
/*---------------*/

@media screen and (min-width: 767px){
.right-inner {
    margin-left: 0px;
    width: 536px;
}
.btn-main-yellow {
    width: 536px;
}
.rightbox {
    padding: 64px 24px 32px;
    -webkit-box-pack: center;
    justify-content: center;
}
.left-footer {
    margin-bottom: 0px;
}
.left-inner {
    margin-right: 0px;
    width: 536px;
}
.leftbox {
    padding: 40px 24px;
    -webkit-box-align: center;
    align-items: center;
}
.main-content-box {
    min-height: 836px;
    flex-direction: column;
}

}

@media screen and (min-width: 1023px){
    .btn-main-yellow {
    width: 434px;
}
    .btn-div {
    padding: 0px;
    -webkit-box-pack: start;
    justify-content: flex-start;
}
.right-inner {
    margin-left: 10%;
    width: 434px;
}
.rightbox {
    padding: 64px 0px 32px;
    -webkit-box-pack: start;
    justify-content: flex-start;
}

.accordion-div .rightbox {
    padding: 64px 50px 32px 0px;
    -webkit-box-pack: start;
    justify-content: flex-start;
}
.accordion-div .rightbox .right-inner{
    width:90% !important;
}

.left-inner {
    margin-right: 10%;
    width: 434px;
}
.left-footer {
    margin-bottom: 48px;
}
.leftbox {
    padding: 64px 0px 32px;
    align-items: flex-end;
}
.main-content-box {
    flex-direction: row;
}
.Main_title {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
}

}



/*--------------------only for need-kyc page---------------------------------*/

.modal-counrty-code .niceCountryInputMenuDropdownContent a{
    height:auto !important;
}

.modal-counrty-code .niceCountryInputMenu{
    display:flex;
    justify-content: space-between;

   height: calc(3.5rem + 2px);
    line-height: 1.25;
    border: 1px solid #ced4da;
    text-align:left;
    padding: 1rem 0.75rem;
}
.legal_txt_box.country_box{
    overflow:unset;
    min-height:auto;
}
.legal_txt_box.country_box .legal_text{
    margin:0px;
}

.modal-counrty-code  .niceCountryInputSelector{
    position: relative;
    display: flex;
    flex-direction: column;

}

.modal-counrty-code .niceCountryInputMenuFilter{
    position: absolute;
    width: 100%;
    top: 50px;
    z-index:99999999;
}
.modal-counrty-code .niceCountryInputMenuDropdownContent{
    position: absolute;
    width: 100%;
    background: white;
    z-index: 999999;
    top: 98px;

}
.modal-counrty-code .niceCountryInputMenuFilter input{
    width: 100%;
    margin: 0;
    border-radius:0px;
}
.modal-counrty-code .niceCountryInputMenuCountryFlag{
    border-radius:0px;
}

.modal-counrty-code .niceCountryInputMenuDropdownContent a:hover {
    background-color: whitesmoke !important;
    color: #000000 !important;
    text-decoration: none;
    border-radius: 0;
}
.modal-counrty-code .niceCountryInputMenuDropdownContent a{
        cursor: pointer;
}
.modal-counrty-code .niceCountryInputMenuDropdownContent a:nth-child(even){
    background:#ffc1081c;
}
/*--------------------only for need-kyc page---------------------------------*/


/*------------------------------------checklist document css popup---------------------*/

 .style-dialog-body {
    padding: 0px;
}
.checklist_box {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    padding: 24px;
    font-size: 14px;
    line-height: 20px;
}

.checklist_header {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
}
.checklist-flex {
    box-sizing: border-box;
    margin: 0px 16px 0px 0px;
    min-width: 0px;
    font-weight: 400;
    font-size: 16px;
    line-height: 24px;
    color: rgb(71, 77, 87);
}
.print-btn {
    box-sizing: border-box;
    margin: 0px;
    display: flex;
    cursor: pointer;
    min-width: 112px;
    -webkit-box-align: center;
    align-items: center;
}
.print-svg {
    box-sizing: border-box;
    margin: 0px 6px 0px 0px;
    min-width: 0px;
    color: rgb(201, 148, 0);
    fill: rgb(201, 148, 0);
    width: 1em;
    height: 1em;
    font-size: 16px;
}
.print-text {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    font-weight: 500;
    font-size: 14px;
    line-height: 20px;
    text-decoration: underline;
    color: rgb(201, 148, 0);
}

.checklist-content-box {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    max-height: 100%;
    overflow-y: scroll;
}
.checklist-content-box {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    max-height: 100%;
    overflow-y: scroll;
}

.checklist-fulll-width {
    box-sizing: border-box;
    margin: 16px 0px;
    min-width: 0px;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    color: rgb(71, 77, 87);
    font-size: 14px;
}
.checklist-half-width {
    box-sizing: border-box;
    margin: 16px 0px;
    min-width: 0px;
    display: flex;
    flex-direction: column;
}
.checklist-label {
    box-sizing: border-box;
    margin: 0px 16px 0px 0px;
    min-width: 0px;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    color: rgb(71, 77, 87);
    font-size: 14px;
    flex: 1 1 0%;
}
.checklist-icon {
    box-sizing: border-box;
    margin: 0px 8px 0px 0px;
    min-width: 0px;
    flex-shrink: 0;
    width: 16px;
    height: 16px;
    line-height: 16px;
}
.checklist-input {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    position: absolute;
    opacity: 0;
    z-index: -1;
    width: 1px;
    height: 1px;
    overflow: hidden;
}
.checklist-icon > svg {
    box-sizing: border-box;
    cursor: pointer;
    border: 1px solid rgb(183, 189, 198);
    border-radius: 2px;
    max-width: 100%;
    max-height: 100%;
    background-color: transparent;
    fill: transparent;
}
.checklist-ssvg {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: currentcolor;
    font-size: 24px;
    fill: currentcolor;
    width: 1em;
    height: 1em;
}
.checklist-text {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    font-weight: 400;
    font-size: 14px;
    color: rgb(30, 35, 41);
    overflow: hidden;
    white-space: normal;
    text-overflow: ellipsis;
    line-height: 20px;
}
@media screen and (min-width: 767px){

.checklist-content-box {
    max-height: 480px;
}
    .checklist-half-width {
    flex-direction: row;
}

}




.checklist-footer {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    position: fixed;
    z-index: 1;
    left: 0px;
    bottom: 0px;
    padding: 32px 24px 24px;
    width: 100%;
    box-shadow: rgb(0 0 0 / 8%) 0px 2px 4px, rgb(0 0 0 / 8%) 0px 0px 4px;
    background-color: rgb(255, 255, 255);
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    align-items: center;
}
.color-lightgray {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: rgb(112, 122, 138);
}
.large-text {
    box-sizing: border-box;
    margin: 0px 4px 0px 0px;
    min-width: 0px;
    font-weight: 600;
    font-size: 32px;
    line-height: 40px;
    color: rgb(30, 35, 41);
    display: inline;
}
@media screen and (min-width: 767px)
{
.checklist-footer {
    position: static;
    z-index: auto;
    left: unset;
    bottom: unset;
    padding-bottom: 0px;
    padding-left: 0px;
    padding-right: 0px;
    width: unset;
    box-shadow: none;
}
}

.disable_div{
        background: whitesmoke;
    padding: 10px 20px;
    position: relative;
    justify-content: start;
    align-items: center;
    box-sizing: border-box;
    cursor: not-allowed;
    border-radius: 0.25rem;
    height: calc(3.5rem + 2px);
    line-height: 1.25;

}
         .img{
         width: 30px;
         height: 30px;
         position: relative;
         margin: 0px 10px;
         }
         .img .flag{
         box-sizing: border-box;
         margin: 0px 8px 0px 0px;
         min-width: 0px;
         max-width: 100%;
         border-radius: 50%;
         flex-shrink: 0;
         width: 100%;
         height: 100%;
         }
         .disable_div  .text{
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         position: relative;
         display: flex;
         font-weight: 500;
         font-size: 20px;
         line-height: 24px;
         -webkit-box-pack: center;
         justify-content: center;}
         .disable_div  .iconbox{
         right:20px;
         position:absolute;
         }

/*------------------------acordion css============**/
 .threedotsvg {
    box-sizing: border-box;
    margin: 0px 8px 0px 0px;
    color: rgb(146, 154, 165);
    font-size: 24px;
    fill: rgb(146, 154, 165);
    width: 1em;
    height: 1em;
    min-width: 24px;
}



.accordion__header {
	padding: 1em;
	background-color: white;
	margin-top: 2px;
	display: flex;
	justify-content: space-between;
	align-items: center;
	cursor: pointer;
}
.accordion__header > * {
	margin-top: 0;
	margin-bottom: 0;
	font-size: 16px;
}
.accordion__header.is-active {
	background-color: white;
	color: black;
}

.accordion__toggle {
	margin-left: 10px;
	height: 3px;
	background-color: #222;
	width: 13px;
	display: block;
	position: relative;
	flex-shrink: 1;
	border-radius: 2px;
}

.accordion__toggle::before {
	content: "";
	width: 3px;
	height: 13px;
	display: block;
	background-color: #222;
	position: absolute;
	top: -5px;
	left: 5px;
	border-radius: 2px;
}

.is-active .accordion__toggle {
	background-color: black;
}
.is-active .accordion__toggle::before {
	display: none;
}


.accordion__body {
	display: none;
	padding: 1em;
	border: 1px solid white;
	border-top: 0;
}
.accordion__body.is-active {
	display: block;
}




.add-detail {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
}
.add-detail button{
    padding:10px 20px !important;
    margin:0px 10px;
}
.btn-no-border{
    margin: 0px;
    appearance: none;
    user-select: none;
    cursor: pointer;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    box-sizing: border-box;
    font-family: inherit;
    font-weight: 500;
    text-align: center;
    text-decoration: none;
    outline: none;
    line-height: 20px;
    word-break: keep-all;
    color: rgb(24, 26, 32);
    border-radius: 4px;
    min-height: 24px;
    border: none;
    background-color: whitesmoke;
    pointer-events: initial;
    font-size: 16px;


}

.add-detail-inner {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    flex-direction: row;
}
.add-detail-inner-box {
    box-sizing: border-box;
    /*margin: 0px 20px 0px 0px;*/
    min-width: 0px;
    display: flex;
    overflow: auto;
    flex-wrap: wrap;
}
.add-detail-modal {
    box-sizing: border-box;
    margin: 8px 32px 8px 0px;
    min-width: 0px;
    display: flex;
    border-radius: 4px;
    cursor: pointer;
    width: 164px;
    height: 164px;
    background-color: rgb(245, 245, 245);
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
}
.add-detail-plus {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    flex-direction: column;
    -webkit-box-align: center;
    align-items: center;
}
.svg-plus-icon {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: rgb(146, 154, 165);
    font-size: 24px;
    fill: rgb(146, 154, 165);
    width: 1em;
    height: 1em;
}
.add-detail-modal:hover svg {
    color: rgb(240, 185, 11);
}
.add-detail {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
}

.btn-border-yellow:disabled:not(.inactive) {
    background-color: transparent;
    color: rgb(183, 189, 198);
}
.btn-border-yellow:disabled {
    cursor: not-allowed;
    background-image: none;
    background-color: rgb(234, 236, 239);
    color: rgb(183, 189, 198);
}
.btn-border-yellow {
    margin: 0px 10px;
    appearance: none;
    user-select: none;
    cursor: pointer;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    box-sizing: border-box;
    font-size: 14px;
    font-family: inherit;
    font-weight: 500;
    text-align: center;
    text-decoration: none;
    outline: none;
    padding: 6px 12px;
    line-height: 20px;
    min-width: 52px;
    word-break: keep-all;
    color: rgb(201, 148, 0);
    border-radius: 4px;
    min-height: 24px;
    border: none;
    background-color: transparent;
    pointer-events: initial;
}
.divider-line{
    border: 1px solid whitesmoke;
    height: 2px;
    margin-top: 30px
}


.main-heading {
    box-sizing: border-box;
    margin: 0px 0px 16px;
    min-width: 0px;
    font-weight: 500;
    font-size: 16px;
    line-height: 24px;
}

.radio-div {
    box-sizing: border-box;
    margin: 0px 24px 0px 0px;
    min-width: 0px;
    font-weight: 400;
    font-size: 14px;
    line-height: 20px;
    display: inline-block;
    cursor: pointer;
}



.radio-div svg {
    color: rgb(240, 185, 11);
}
.radio-div svg {
    color: rgb(240, 185, 11);
}




.form-inner {
    box-sizing: border-box;
    margin: 0px 12px;
    min-width: 0px;
    display: flex;
    height: 100%;
    overflow: auto;
    padding-left: 12px;
    padding-right: 12px;
    flex-direction: column;
}
@media screen and (min-width: 767px)
{
.form-inner {
    height: 500px;
}
}
.d-column {
    box-sizing: border-box;
    margin: 0px 0px 24px;
    min-width: 0px;
    display: flex;
    flex-direction: column;
}

.column3 {
    box-sizing: border-box;
    margin: 0px 0px 8px;
    min-width: 0px;
    display: grid;
    gap: 8px;
    grid-template-columns: repeat(1, 1fr);
}
.column2 {
    box-sizing: border-box;
    margin: 0px 0px 8px;
    min-width: 0px;
    display: grid;
    gap: 8px;
    grid-template-columns: repeat(1, 1fr);
}
@media screen and (min-width: 1023px)
{
.column3 {
    grid-template-columns: repeat(3, 1fr);
}
 .column2 {
    grid-template-columns: repeat(2, 1fr);
}
}
@media screen and (min-width: 767px)
{
.column3 {
    grid-template-columns: repeat(3, 1fr);
}
 .column2 {
    grid-template-columns: repeat(2, 1fr);
}
}




#Add-Director .form-floating>label{
  padding:.5rem .75rem;
  color:rgb(112, 122, 138) !important;
}
#Add-Director .form-floating>.form-control, #Add-Director .bootstrap-select>.dropdown-toggle{
  padding: 0.5rem 0.75rem;
  height: calc(2.5rem + 2px) !important;
}


.multiple-text {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    color:rgb(112, 122, 138) !important;
    font-size: 14px;
}


.upl-doc {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: grid;
    gap: 8px;
    grid-template-columns: repeat(2, 1fr);
}

.upl-doc-inner {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    border-radius: 4px;
    position: relative;
    border: 2px dashed rgb(234, 236, 239);
    width: 100%;
    height: 184px;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    background-color: transparent;
}
.inner-doc {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    flex-direction: column;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    width: 100%;
    height: 100%;
}
.upld-main {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    flex-direction: column;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
}
.upld-text {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    font-weight: 500;
    font-size: 12px;
    line-height: 16px;
    color: rgb(112, 122, 138);
}
.icon-div {
    box-sizing: border-box;
    margin: 16px 0px 0px;
    min-width: 0px;
    display: flex;
    border-radius: 4px;
    -webkit-box-align: center;
    align-items: center;
    background-color: rgb(245, 245, 245);
    padding: 6px 16px;
}
.icon-upl {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: currentcolor;
    font-size: 16px;
    fill: currentcolor;
    width: 1em;
    height: 1em;
}

.img-types {
    box-sizing: border-box;
    margin: 8px 0px 0px;
    min-width: 0px;
    font-weight: 400;
    font-size: 12px;
    line-height: 16px;
    color: rgb(174, 180, 188);
}

.radio-btns{
    margin-right:5px !important;
}
.doc-type > div {
    margin-right:20px;
}

.label-text{
    color:rgb(112, 122, 138) !important;
    margin-bottom:10px;
    font-size:14px;
    display:block;
}

.upld-btn-div-outer {
    box-sizing: border-box;
    margin: 0px 20px 0px 0px;
    min-width: 0px;
    display: flex;
    overflow: auto;
    flex-wrap: wrap;
}
.upld-btn-div-inner {
    box-sizing: border-box;
    margin: 8px 32px 8px 0px;
    min-width: 0px;
    display: flex;
    border-radius: 4px;
    cursor: pointer;
    width: 164px;
    height: 164px;
    background-color: rgb(245, 245, 245);
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
}
.upld-btn-div {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    flex-direction: column;
    -webkit-box-align: center;
    align-items: center;
}
.upld-btn-icon {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: rgb(146, 154, 165);
    font-size: 24px;
    fill: rgb(146, 154, 165);
    width: 1em;
    height: 1em;
}

.added_user {
    box-sizing: border-box;
    margin: 0px 0px 8px;
    min-width: 0px;
    display: flex;
    flex-direction: column;
}

.added_user-inner {
    box-sizing: border-box;
    margin: 8px 32px 8px 0px;
    min-width: 0px;
    display: flex;
    border-radius: 4px;
    width: 164px;
    height: 164px;
    background-color: rgb(245, 245, 245);
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    flex-direction: column;
}
.delete-btn-div {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    position: relative;
    width: 100%;
}
.delete-user-btn {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: rgb(183, 189, 198);
    font-size: 18px;
    fill: rgb(183, 189, 198);
    position: absolute;
    top: -50px;
    right: -8px;
    cursor: pointer;
    width: 1em;
    height: 1em;
}
.added_user-icon-div {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    flex-direction: column;
    -webkit-box-align: center;
    align-items: center;
    width: 100%;
}
.added_user-icon {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: currentcolor;
    font-size: 48px;
    fill: currentcolor;
    width: 1em;
    height: 1em;
}
.user_des-div {
    box-sizing: border-box;
    margin: 10px 0px 0px;
    min-width: 0px;
    display: flex;
    align-items: flex-end;
    color: rgb(30, 35, 41);
    font-size: 14px;
    line-height: 20px;
}
.user_detail {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    max-width: 76px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    color: rgb(30, 35, 41);
}

.edit_user {
    box-sizing: border-box;
    margin: 0px 0px 0px 4px;
    min-width: 0px;
    color: rgb(146, 154, 165);
    fill: rgb(146, 154, 165);
    cursor: pointer;
    width: 1em;
    height: 1em;
    font-size: 16px;
}

.warning-icon {
    box-sizing: border-box;
    margin: 0px 0px 24px;
    min-width: 0px;
    color: currentcolor;
    font-size: 96px;
    fill: currentcolor;
    width: 1em;
    height: 1em;
}

.delete-modal-btn > button{
    width:50% !important;
    margin:0px 10px;
}
.encrypted-main {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    flex-direction: column;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    width: 100%;
    height: 100%;
}
.encrypted-inner {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    width: 100%;
    height: 100%;
    flex-direction: column;
    background-color: rgb(250, 250, 250);
    padding-top: 40px;
}
.encrypted-inner-left {
    box-sizing: border-box;
    margin: 0px 0px 12px;
    min-width: 0px;
    display: flex;
    position: relative;
    -webkit-box-pack: center;
    justify-content: center;
    width: 100%;
}
.encrypted-inner-text {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    position: absolute;
    top: 40px;
    width: 240px;
    font-size: 14px;
    color: rgb(112, 122, 138);
    text-align: center;
}
.encrypted-inner-svg {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: rgb(234, 236, 239);
    font-size: 96px;
    fill: rgb(234, 236, 239);
    width: 1em;
    height: 1em;
}
.encrypted-inner-right {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    flex-direction: row;
    width: 100%;
    -webkit-box-pack: center;
    justify-content: center;
}

.file-encrypted-div {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: grid;
    gap: 8px;
    grid-template-columns: repeat(2, 1fr);
}
.encrypted-div {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    border-radius: 4px;
    position: relative;
    border: 2px dashed rgb(234, 236, 239);
    width: 100%;
    height: 184px;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    background-color: transparent;
}
.Proof-of-address .text-danger{
    color:red;
}
.instractions{
   color: rgb(112, 122, 138) !important
}

.upld-btn-div {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: grid;
    gap: 8px;
    grid-template-columns: repeat(1, 1fr);
}
@media screen and (min-width: 1023px)
{
.upld-btn-div {
    grid-template-columns: repeat(2, 1fr);
}}
@media screen and (min-width: 767px)
{
.upld-btn-div {
    grid-template-columns: repeat(2, 1fr);
}
}
.upld-btn-outer {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    flex-direction: column;
}
.upld-btn-inner {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    flex-shrink: 0;
}
.generate-btn {
    margin: 0px;
    appearance: none;
    user-select: none;
    cursor: pointer;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    box-sizing: border-box;
    font-size: 14px;
    font-family: inherit;
    font-weight: 500;
    text-align: center;
    text-decoration: none;
    outline: none;
    line-height: 20px;
    word-break: keep-all;
    color: rgb(30, 35, 41);
    border-radius: 4px;
    min-height: 24px;
    box-shadow: none;
    position: relative;
    border: none;
    background-color: rgb(234, 236, 239);
    padding: 6px 16px;
    min-width: 180px;
}
.generate-btn:disabled {
    cursor: not-allowed;
    background-image: none;
    background-color: rgb(234, 236, 239);
    color: rgb(183, 189, 198);
}
.upld-icon {
    box-sizing: border-box;
    margin: 0px 2px 0px 0px;
    min-width: 0px;
    color: currentcolor;
    fill: currentcolor;
    transform: rotate(270deg);
    width: 1em;
    height: 1em;
    font-size: 16px;
}


.upld-btn-outer {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    flex-direction: column;
}
.upld-btn-inner {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    flex-shrink: 0;
}
.generate-btn {
    margin: 0px;
    appearance: none;
    user-select: none;
    cursor: pointer;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    box-sizing: border-box;
    font-size: 14px;
    font-family: inherit;
    font-weight: 500;
    text-align: center;
    text-decoration: none;
    outline: none;
    line-height: 20px;
    word-break: keep-all;
    color: rgb(30, 35, 41);
    border-radius: 4px;
    min-height: 24px;
    box-shadow: none;
    position: relative;
    border: none;
    background-color: rgb(234, 236, 239);
    padding: 6px 16px;
    min-width: 180px;
}
.upld-icon {
    box-sizing: border-box;
    margin: 0px 2px 0px 0px;
    min-width: 0px;
    color: currentcolor;
    fill: currentcolor;
    transform: rotate(270deg);
    width: 1em;
    height: 1em;
    font-size: 16px;
}

.confirm-btn.inactive {
    background-color: rgb(252, 213, 53);
    opacity: 0.3;
    color: rgb(24, 26, 32);
    cursor: not-allowed;
}
.confirm-btn {
    margin: 24px 0px 0px;
    appearance: none;
    user-select: none;
    cursor: pointer;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    box-sizing: border-box;
    font-size: 14px;
    font-family: inherit;
    font-weight: 500;
    text-align: center;
    text-decoration: none;
    outline: none;
    padding: 6px 12px;
    line-height: 20px;
    min-width: 52px;
    word-break: keep-all;
    color: rgb(24, 26, 32);
    border-radius: 4px;
    min-height: 24px;
    border: none;
    background-image: none;
    background-color: rgb(252, 213, 53);
    height: 32px;
    pointer-events: initial;
    width: 180px;
}
.confirm-btn:hover:not(:disabled):not(:active) {
    box-shadow: none;
}
.generate-btn:hover:not(:disabled):not(:active) {
    background-color: rgb(254, 246, 216);
    border-color: rgb(252, 213, 53);
}



/*------------------------dont- move another page --------------------------------*/


 .form-floating>.form-control, .form-floating>.form-select{
    height:calc(2.5rem + 2px);
}
.form-floating>label{
    padding:.5rem .75rem;
}

 .bootstrap-select>.dropdown-toggle{
    height:calc(2.5rem + 2px);
    padding: 0.5rem 0.75rem;
}

/*------------------------dont- move another page --------------------------------*/

  </style>
   </head>
   <body class="bg-white">

        <?php
        function getClientIP(){
          if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
          } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
          } else {
            $ip = $_SERVER['REMOTE_ADDR'];
          }
          return $ip;
        }

        $ipaddress = getClientIP();
        function ip_details($ip) {
          $json = file_get_contents("http://ipinfo.io/{$ip}/geo");
          $details = json_decode($json, true);
          return $details;
        }
        $details = ip_details($ipaddress);
        $country_code=$details['country'];
        //print_r($country_code);



        $url = 'http://country.io/names.json';
        $json = file_get_contents($url);
        $jo = json_decode($json);


    ?>

      @include('template.custom_header')

 <!--     @foreach($jo AS $key => $cn)-->
                                       <!--{{ $cn }}-->
 <!--          <img src="{{asset('img/country-flag/'.$key.'.png') }}" class="flag-img">                           -->

 <!--@endforeach      -->

<?php
// echo $microtime = microtime();
//$date = date("Ymd");
//$time = time();
// $rand = strtoupper(substr(uniqid(sha1(time())),0,4));
// echo $unique = $date.$time;
// echo str_shuffle('12345678901234567890');



// $result = preg_replace("/[^A-Z]+/", "", 'amitblog_123@gmail.com');

//$result2 =  intval( 'hgjhgjhgjg' );

//print_r($result2);






?>



    <div class="main-content-box" id="first">
  <div class="leftbox">
    <div class="left-inner">
      <div class="border-box">
        <div class="Main_title">
          <div class="p-bold">Shubham-1</div>
          <div class="Edit-box">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="Edit-icon">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M17.879 3.293l2.828 2.828-2.12 2.121-2.83-2.828 2.122-2.121zm-3.183 3.182l2.829 2.829-4.667 4.666H10.03v-2.828l4.666-4.667zM7 4h4v3H7v10h10v-4h3v7H4V4h3z" fill="currentColor"></path>
            </svg>
          </div>
        </div>
        <div class="opt-display">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.534 16.32a7.826 7.826 0 10-11.068 0L12 21.854l5.534-5.534zM12 7l-4 4 4 4 4-4-4-4z" fill="currentColor"></path>
          </svg>
          <img src="{{asset('img/Flag_of_India.jpg') }}" class="flag-img">
          <div class="border-box">India</div>
        </div>
        <div class="opt-display">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3v18h14V7l-4-4H5zm3 6.5h8V12H8V9.5zm0 5h8V17H8v-2.5z" fill="currentColor"></path>
          </svg>
          <div class="opt-display-txt">Government Body/Agency</div>
        </div>
        <div class="opt-display">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 4v12l8 5 8-5V4H4zm12 7a4 4 0 11-8 0 4 4 0 018 0zm-4-2.121L9.879 11 12 13.121 14.121 11 12 8.879z" fill="currentColor"></path>
          </svg>
          <div class="opt-display-txt">Sovereign Wealth Fund/ Government Investment Fund</div>
        </div>
      </div>
      <div class="left-footer">
        <div class="border-box">
          <div class="p-bold mb-3">FAQ</div>
          <div class="footer-optn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3v18h14V7l-4-4H5zm3 6.5h8V12H8V9.5zm0 5h8V17H8v-2.5z" fill="currentColor"></path>
            </svg>
            <a target="_blank" href="#" class="a-txt">
              <div class="a-txt-innner">How to Apply for Entity Verification</div>
            </a>
          </div>
          <div class="checklist">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3v18h14V7l-4-4H5zm3 6.5h8V12H8V9.5zm0 5h8V17H8v-2.5z" fill="currentColor"></path>
            </svg>
            <a target="_blank" href="#" class="a-txt">
              <div class="a-txt-innner">How to Manage Sub-Account Functions and Frequently Asked Questions</div>
            </a>
          </div>
        </div>
        <div class="checklist">
          <div class="checklist-inner">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="checklist-svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M20 3v19H4V3h16z" fill="url(#whitelist-g_svg__paint0_linear)"></path>
              <path d="M16 3h-3V1h-2v2H8v2h8V3zM6.498 13.492l4 4.01 7-6.992-1.42-1.42-5.58 5.582-2.59-2.59-1.41 1.41z" fill="#76808F"></path>
              <defs>
                <linearGradient id="whitelist-g_svg__paint0_linear" x1="12" y1="22" x2="12" y2="3" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#F0B90B"></stop>
                  <stop offset="1" stop-color="#F8D33A"></stop>
                </linearGradient>
              </defs>
            </svg>Checklist
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="rightbox">
    <div class="right-inner">
      <div class="_des_box">
        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="2" y="10" width="6" height="10" fill="#76808F"></rect>
          <rect x="16" y="8" width="6" height="12" fill="#76808F"></rect>
          <rect width="8" height="17" transform="matrix(1 0 0 -1 8 20)" fill="url(#paint108_1_linear)"></rect>
          <path d="M10 9L12 7L14 9L12 11L10 9Z" fill="#76808F"></path>
          <defs>
            <linearGradient id="paint108_1_linear" x1="4" y1="0" x2="4" y2="17" gradientUnits="userSpaceOnUse">
              <stop stop-color="#F0B90B"></stop>
              <stop offset="1" stop-color="#F8D33A"></stop>
            </linearGradient>
          </defs>
        </svg>
      </div>
      <div class="_des_box">
        <div class="_title">Entity Verification</div>
      </div>
      <div class="_subtitle">Account limits after Verification</div>
      <div class="_right_main_content">
        <div class="_des_list_box">
          <div class="_div_box">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="_svg_icon">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
            </svg>
            <div class="_des">Unlimited crypto deposit</div>
          </div>
        </div>
        <div class="_des_list_box">
          <div class="_div_box">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="_svg_icon">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
            </svg>
            <div class="_des">8000000 BUSD crypto withdrawal limit every 24 hours</div>
          </div>
        </div>
        <div class="_des_list_box">
          <div class="_div_box">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="_svg_icon">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
            </svg>
            <div class="_des">
              <a type="link" href="/en/vip-institutional-services" target="_blank">Institutional &amp; VIP Services</a>
            </div>
          </div>
        </div>
        <div class="_des_list_box">
          <div class="_div_box">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="_svg_icon">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
            </svg>
            <div class="_des">Fiat deposit/withdrawal (optional)</div>
          </div>
        </div>
      </div>
      <div class="btn-div">
        <button type="button" id="verify_btn" class="btn-main-yellow">Verify</button>
      </div>
    </div>
  </div>
</div>
                <div id="second_div" style="display:none">
                  <div class="main-content-box">
                    <div class="leftbox">
                      <div class="left-inner">
                        <div class="border-box">
                          <div class="Main_title">
                            <div class="p-bold">Shubham</div>
                            <div class="Edit-box">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="Edit-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.879 3.293l2.828 2.828-2.12 2.121-2.83-2.828 2.122-2.121zm-3.183 3.182l2.829 2.829-4.667 4.666H10.03v-2.828l4.666-4.667zM7 4h4v3H7v10h10v-4h3v7H4V4h3z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="opt-display">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M17.534 16.32a7.826 7.826 0 10-11.068 0L12 21.854l5.534-5.534zM12 7l-4 4 4 4 4-4-4-4z" fill="currentColor"></path>
                            </svg>
                            <img src="{{asset('img/Flag_of_India.jpg') }}" class="flag-img">
                            <div class="border-box">India</div>
                          </div>
                          <div class="opt-display">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3v18h14V7l-4-4H5zm3 6.5h8V12H8V9.5zm0 5h8V17H8v-2.5z" fill="currentColor"></path>
                            </svg>
                            <div class="opt-display-txt">Government Body/Agency</div>
                          </div>
                          <div class="opt-display">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4 4v12l8 5 8-5V4H4zm12 7a4 4 0 11-8 0 4 4 0 018 0zm-4-2.121L9.879 11 12 13.121 14.121 11 12 8.879z" fill="currentColor"></path>
                            </svg>
                            <div class="opt-display-txt">Sovereign Wealth Fund/ Government Investment Fund</div>
                          </div>
                        </div>
                        <div class="left-footer">
                          <div class="border-box">
                            <div class="p-bold mb-3">FAQ</div>
                            <div class="footer-optn">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3v18h14V7l-4-4H5zm3 6.5h8V12H8V9.5zm0 5h8V17H8v-2.5z" fill="currentColor"></path>
                              </svg>
                              <a target="_blank" href="#" class="a-txt">
                                <div class="a-txt-innner">How to Apply for Entity Verification</div>
                              </a>
                            </div>
                            <div class="checklist">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3v18h14V7l-4-4H5zm3 6.5h8V12H8V9.5zm0 5h8V17H8v-2.5z" fill="currentColor"></path>
                              </svg>
                              <a target="_blank" href="#" class="a-txt">
                                <div class="a-txt-innner">How to Manage Sub-Account Functions and Frequently Asked Questions</div>
                              </a>
                            </div>
                          </div>
                          <div class="checklist">
                            <div class="checklist-inner">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="checklist-svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 3v19H4V3h16z" fill="url(#whitelist-g_svg__paint0_linear)"></path>
                                <path d="M16 3h-3V1h-2v2H8v2h8V3zM6.498 13.492l4 4.01 7-6.992-1.42-1.42-5.58 5.582-2.59-2.59-1.41 1.41z" fill="#76808F"></path>
                                <defs>
                                  <linearGradient id="whitelist-g_svg__paint0_linear" x1="12" y1="22" x2="12" y2="3" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                  </linearGradient>
                                </defs>
                              </svg>Checklist
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="rightbox">
                      <div class="right-inner">
                        <div class="_des_box">
                          <div class="_title">Start your entity application</div>
                          <div class="_subtitle">Answer a few questions below to see what you need to prepare</div>
                        </div>
                        <div class="_right_main_content">
                          <form action="#" style="width: 100%; height: 100%;">
                            <div class="main_content_inner">
                              <div class="_des_box">
                                <div class="_mb-40px">
                                  <div class="_border_box">
                                    <div class="_des_heading">What is the name of your entity?</div>
                                    <div class="form-floating mt-3 mb-3">
                                      <input type="text" id="doccc" class="form-control" placeholder="As displayed on your original document">
                                      <label for="floatingInput">As displayed on your original document</label>
                                    </div>
                                  </div>
                                </div>
                                <div class="_mb-40px">
                                  <div class="_border_box">
                                    <div class="_des_heading">Which country is your entity registered in? </div>
                                  </div>
                                  <div class="modal-counrty-code  mt-3 mb-3">
                                    <div class="niceCountryInputSelector" data-selectedcountry="{{ $country_code }}" data-showspecial="false" data-showflags="true" data-i18nall="All selected" onclick="select_country();" data-i18nnofilter="No selection" data-i18nfilter="no Filter"></div>
                                  </div>
                                </div>
                              </div>
                          </form>
                        </div>
                        </form>
                      </div>
                      <div class="_des_box">
                        <button type="button" id="btn-2" class="inactive btn-main-yellow">
                          <div class="_btn_text">Continue</div>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
                <div id="third" style="display:none">
                  <div class="main-content-box">
                    <div class="leftbox">
                      <div class="left-inner">
                        <div class="border-box">
                          <div class="Main_title">
                            <div class="p-bold">Shubham</div>
                            <div class="Edit-box">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="Edit-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.879 3.293l2.828 2.828-2.12 2.121-2.83-2.828 2.122-2.121zm-3.183 3.182l2.829 2.829-4.667 4.666H10.03v-2.828l4.666-4.667zM7 4h4v3H7v10h10v-4h3v7H4V4h3z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="opt-display">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M17.534 16.32a7.826 7.826 0 10-11.068 0L12 21.854l5.534-5.534zM12 7l-4 4 4 4 4-4-4-4z" fill="currentColor"></path>
                            </svg>
                            <img src="{{asset('img/Flag_of_India.jpg') }}" class="flag-img">
                            <div class="border-box">India</div>
                          </div>
                          <div class="opt-display">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3v18h14V7l-4-4H5zm3 6.5h8V12H8V9.5zm0 5h8V17H8v-2.5z" fill="currentColor"></path>
                            </svg>
                            <div class="opt-display-txt">Government Body/Agency</div>
                          </div>
                          <div class="opt-display">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4 4v12l8 5 8-5V4H4zm12 7a4 4 0 11-8 0 4 4 0 018 0zm-4-2.121L9.879 11 12 13.121 14.121 11 12 8.879z" fill="currentColor"></path>
                            </svg>
                            <div class="opt-display-txt">Sovereign Wealth Fund/ Government Investment Fund</div>
                          </div>
                        </div>
                        <div class="left-footer">
                          <div class="border-box">
                            <div class="p-bold mb-3">FAQ</div>
                            <div class="footer-optn">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3v18h14V7l-4-4H5zm3 6.5h8V12H8V9.5zm0 5h8V17H8v-2.5z" fill="currentColor"></path>
                              </svg>
                              <a target="_blank" href="#" class="a-txt">
                                <div class="a-txt-innner">How to Apply for Entity Verification</div>
                              </a>
                            </div>
                            <div class="checklist">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3v18h14V7l-4-4H5zm3 6.5h8V12H8V9.5zm0 5h8V17H8v-2.5z" fill="currentColor"></path>
                              </svg>
                              <a target="_blank" href="#" class="a-txt">
                                <div class="a-txt-innner">How to Manage Sub-Account Functions and Frequently Asked Questions</div>
                              </a>
                            </div>
                          </div>
                          <div class="checklist">
                            <div class="checklist-inner">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="checklist-svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 3v19H4V3h16z" fill="url(#whitelist-g_svg__paint0_linear)"></path>
                                <path d="M16 3h-3V1h-2v2H8v2h8V3zM6.498 13.492l4 4.01 7-6.992-1.42-1.42-5.58 5.582-2.59-2.59-1.41 1.41z" fill="#76808F"></path>
                                <defs>
                                  <linearGradient id="whitelist-g_svg__paint0_linear" x1="12" y1="22" x2="12" y2="3" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                  </linearGradient>
                                </defs>
                              </svg>Checklist
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="rightbox">
                      <div class="right-inner">
                        <div class="_des_box">
                          <div class="_title">What is your entity type?</div>
                        </div>
                        <div class="_right_main_content">
                          <form action="#" style="width: 100%; height: 100%;">
                            <div class="main_content_inner">
                              <div class="_des_box">
                                <div class="_mb-40px">
                                  <div class="_border_box">
                                    <div class="_mb-16px">
                                      <div class="_des_heading">What is the legal form of your entity?</div>
                                      <div class="legal_txt">What is legal form?</div>
                                      <div class="mt-3 mb-3">
                                        <div class="dropdown-theme">
                                          <select class="selectpicker selectpicker1 w-100" data-selected-text-format="count > 1">
                                            <option></option>
                                            <option>Company Limited by Shares or Guarantee</option>
                                            <option>Foundations / Co-ops / Unions / Associations / Clubs / Societies</option>
                                            <option>Government Body/Agency</option>
                                            <option>Limited Liability Company</option>
                                            <option>Partnership</option>
                                            <option>Segregated Portfolio/Protected Cell/Variable Capital Type Companies</option>
                                            <option>Trust</option>
                                            <option>Others</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="_mb-40px">
                                  <div class="_border_box">
                                    <div class="_mb-16px">
                                      <div class="_des_heading">Select your company type</div>
                                      <div class="mt-3 mb-3">
                                        <div class="dropdown-theme">
                                          <select class="selectpicker selectpicker2 w-100" data-selected-text-format="count > 1">
                                            <option></option>
                                            <option>Family Office</option>
                                            <option>Proprietary Trader</option>
                                            <option>Other Financial Institution <br>Including Money Remittance/ Transmitter, Payment Service Providers </option>
                                            <option>Fund</option>
                                            <option>Cryptocurrency Exchange/broker</option>
                                            <option>Other Digital Asset / Cryptocurrency related service provider</option>
                                            <option>Other</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="_btn_div">
                          <button type="button" class=" _btn_default">
                            <div class="_btn_text">Previous</div>
                          </button>
                          <button type="button" id="select_farm" class="btn-main-yellow inactive">
                            <div class="_btn_text">Continue</div>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="fourth" style="display:none">
                  <div class="main-content-box">
                    <div class="leftbox">
                      <div class="left-inner">
                        <div class="border-box">
                          <div class="Main_title">
                            <div class="p-bold">Shubham</div>
                            <div class="Edit-box">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="Edit-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.879 3.293l2.828 2.828-2.12 2.121-2.83-2.828 2.122-2.121zm-3.183 3.182l2.829 2.829-4.667 4.666H10.03v-2.828l4.666-4.667zM7 4h4v3H7v10h10v-4h3v7H4V4h3z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="opt-display">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M17.534 16.32a7.826 7.826 0 10-11.068 0L12 21.854l5.534-5.534zM12 7l-4 4 4 4 4-4-4-4z" fill="currentColor"></path>
                            </svg>
                            <img src="{{asset('img/Flag_of_India.jpg') }}" class="flag-img">
                            <div class="border-box">India</div>
                          </div>
                          <div class="opt-display">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3v18h14V7l-4-4H5zm3 6.5h8V12H8V9.5zm0 5h8V17H8v-2.5z" fill="currentColor"></path>
                            </svg>
                            <div class="opt-display-txt">Government Body/Agency</div>
                          </div>
                          <div class="opt-display">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4 4v12l8 5 8-5V4H4zm12 7a4 4 0 11-8 0 4 4 0 018 0zm-4-2.121L9.879 11 12 13.121 14.121 11 12 8.879z" fill="currentColor"></path>
                            </svg>
                            <div class="opt-display-txt">Sovereign Wealth Fund/ Government Investment Fund</div>
                          </div>
                        </div>
                        <div class="left-footer">
                          <div class="border-box">
                            <div class="p-bold mb-3">FAQ</div>
                            <div class="footer-optn">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3v18h14V7l-4-4H5zm3 6.5h8V12H8V9.5zm0 5h8V17H8v-2.5z" fill="currentColor"></path>
                              </svg>
                              <a target="_blank" href="#" class="a-txt">
                                <div class="a-txt-innner">How to Apply for Entity Verification</div>
                              </a>
                            </div>
                            <div class="checklist">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3v18h14V7l-4-4H5zm3 6.5h8V12H8V9.5zm0 5h8V17H8v-2.5z" fill="currentColor"></path>
                              </svg>
                              <a target="_blank" href="#" class="a-txt">
                                <div class="a-txt-innner">How to Manage Sub-Account Functions and Frequently Asked Questions</div>
                              </a>
                            </div>
                          </div>
                          <div class="checklist">
                            <div class="checklist-inner">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="checklist-svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 3v19H4V3h16z" fill="url(#whitelist-g_svg__paint0_linear)"></path>
                                <path d="M16 3h-3V1h-2v2H8v2h8V3zM6.498 13.492l4 4.01 7-6.992-1.42-1.42-5.58 5.582-2.59-2.59-1.41 1.41z" fill="#76808F"></path>
                                <defs>
                                  <linearGradient id="whitelist-g_svg__paint0_linear" x1="12" y1="22" x2="12" y2="3" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                  </linearGradient>
                                </defs>
                              </svg>Checklist
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="rightbox">
                      <div class="right-inner">
                        <div class="_des_box">
                          <div class="_title">Additional support</div>
                        </div>
                        <div class="_right_main_content">
                          <form action="#" style="width: 100%; height: 100%;">
                            <div class="main_content_inner">
                              <div class="_des_box">
                                <div class="_mb-40px">
                                  <div class="_border_box">
                                    <div class="_mb-16px">
                                      <div class="_des_heading">Have you already been in touch with a Binance Key Account Manager?</div>
                                      <div class="mt-3 mb-3">
                                        <div class="spprt-box">
                                          <label class="spprt-label">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" class="spprt-svgicon selectYes add1">
                                              <circle cx="8" cy="8" r="7.5" stroke="currentColor"></circle>
                                              <circle cx="8" cy="8" r="4" fill="currentColor" style="display:none"></circle>
                                            </svg>
                                            <div class="spprt-inpt_div">Yes, I have <input hidden="" type="radio" value="1" style="clip: rect(0px, 0px, 0px, 0px); position: absolute;">
                                            </div>
                                          </label>
                                        </div>
                                        <div class="spprt-box">
                                          <label class="spprt-label">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" class="spprt-svgicon selectNo add2">
                                              <circle cx="8" cy="8" r="7.5" stroke="currentColor"></circle>
                                              <circle cx="8" cy="8" r="4" fill="currentColor" style="display:none"></circle>
                                            </svg>
                                            <div class="spprt-inpt_div">No, I haven’t <input hidden="" type="radio" value="0" style="clip: rect(0px, 0px, 0px, 0px); position: absolute;">
                                            </div>
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="_mb-40px" id="idYes" style="display:none">
                                  <div class="_border_box">
                                    <div class="_mb-16px">
                                      <div class="_des_heading">Please add the name of the Key Account Manager here</div>
                                      <div class="form-floating mt-3 mb-3">
                                        <input type="text" class="form-control" placeholder="Please add the name ...." />
                                        <label for="floatingInput">name of the Key Account Manager here.....</label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="_mb-40px" id="ifNo" style="display:none">
                                  <div class="_border_box">
                                    <div class="_mb-16px">
                                      <div class="_des_heading">Please provide us with your most recent email.</div>
                                      <div class="form-floating mt-3 mb-5">
                                        <input type="text" class="form-control" placeholder="Please add the name ...." />
                                        <label for="floatingInput">Enter your mail</label>
                                      </div>
                                      <span class="fs-6 mt-1 text-secondary">You can also take the initiative and get in touch with us via</span>
                                      <span class="helpmail">help@wealthmark.io</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="_des_box">
                          <div class="_btn_div">
                            <button type="button" class=" _btn_default">
                              <div class="_btn_text">Previous</div>
                            </button>
                            <button type="button" class="btn-main-yellow inactive modal-trigger" data-modal="verify_process">
                              <div class="_btn_text ">Continue</div>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

<!------------------------------------------------------------------------------------------------------------>
                <div id="fifth" style="display:none">
                  <div class="main-content-box">
                    <div class="leftbox">
                      <div class="left-inner">
                        <div class="border-box">
                          <div class="Main_title">
                            <div class="p-bold">Shubham</div>
                            <div class="Edit-box">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="Edit-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.879 3.293l2.828 2.828-2.12 2.121-2.83-2.828 2.122-2.121zm-3.183 3.182l2.829 2.829-4.667 4.666H10.03v-2.828l4.666-4.667zM7 4h4v3H7v10h10v-4h3v7H4V4h3z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="opt-display">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M17.534 16.32a7.826 7.826 0 10-11.068 0L12 21.854l5.534-5.534zM12 7l-4 4 4 4 4-4-4-4z" fill="currentColor"></path>
                            </svg>
                            <img src="{{asset('img/Flag_of_India.jpg') }}" class="flag-img">
                            <div class="border-box">India</div>
                          </div>
                          <div class="opt-display">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3v18h14V7l-4-4H5zm3 6.5h8V12H8V9.5zm0 5h8V17H8v-2.5z" fill="currentColor"></path>
                            </svg>
                            <div class="opt-display-txt">Government Body/Agency</div>
                          </div>
                          <div class="opt-display">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4 4v12l8 5 8-5V4H4zm12 7a4 4 0 11-8 0 4 4 0 018 0zm-4-2.121L9.879 11 12 13.121 14.121 11 12 8.879z" fill="currentColor"></path>
                            </svg>
                            <div class="opt-display-txt">Sovereign Wealth Fund/ Government Investment Fund</div>
                          </div>
                        </div>
                        <div class="left-footer">
                          <div class="border-box">
                            <div class="p-bold">FAQ</div>
                            <div class="footer-optn">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3v18h14V7l-4-4H5zm3 6.5h8V12H8V9.5zm0 5h8V17H8v-2.5z" fill="currentColor"></path>
                              </svg>
                              <a target="_blank" href="#" class="a-txt">
                                <div class="a-txt-innner">How to Apply for Entity Verification</div>
                              </a>
                            </div>
                            <div class="checklist">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="left-svg-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3v18h14V7l-4-4H5zm3 6.5h8V12H8V9.5zm0 5h8V17H8v-2.5z" fill="currentColor"></path>
                              </svg>
                              <a target="_blank" href="#" class="a-txt">
                                <div class="a-txt-innner">How to Manage Sub-Account Functions and Frequently Asked Questions</div>
                              </a>
                            </div>
                          </div>
                          <div class="checklist">
                            <div class="checklist-inner">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="checklist-svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 3v19H4V3h16z" fill="url(#whitelist-g_svg__paint0_linear)"></path>
                                <path d="M16 3h-3V1h-2v2H8v2h8V3zM6.498 13.492l4 4.01 7-6.992-1.42-1.42-5.58 5.582-2.59-2.59-1.41 1.41z" fill="#76808F"></path>
                                <defs>
                                  <linearGradient id="whitelist-g_svg__paint0_linear" x1="12" y1="22" x2="12" y2="3" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                  </linearGradient>
                                </defs>
                              </svg>Checklist
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="rightbox">
                      <div class="right-inner">
                        <div class="border-box">
                          <div class="heading-box">
                            <div class="p-bold">Verify your business information</div>
                            <div class="counting">0/4</div>
                          </div>
                          <div class="optn-box" id="basic_information">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="optn-box-svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M22 20H2V4h20v16zM4 7h7v6H4V7zm9 0h4v2h-4V7z" fill="url(#id-g_svg__paint0_linear)"></path>
                              <path d="M7.5 12a2 2 0 100-4 2 2 0 000 4zM11 17v-4H4v4h7zM13 11h7v2h-7v-2zM20 15h-7v2h7v-2z" fill="#76808F"></path>
                              <defs>
                                <linearGradient id="id-g_svg__paint0_linear" x1="12" y1="20" x2="12" y2="4" gradientUnits="userSpaceOnUse">
                                  <stop stop-color="#F0B90B"></stop>
                                  <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                              </defs>
                            </svg>
                            <div class="optn-box-txt">
                              <div class="p-bold">Basic Information</div>
                              <div class="p-light">Fill in basic entity information</div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="optn-arrow">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                            </svg>
                          </div>
                          <div class="optn-box" id="Related-Parties">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="optn-box-svg">
                              <path d="M17 13v3h2v-3h3v-2h-3V8h-2v3h-3v2h3zM3 18a4 4 0 014-4h4a4 4 0 014 4v3H3v-3z" fill="#76808F"></path>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M13.5 7.5a4.5 4.5 0 10-9 0 4.5 4.5 0 009 0z" fill="url(#referral-g_svg__paint0_linear)"></path>
                              <defs>
                                <linearGradient id="referral-g_svg__paint0_linear" x1="9" y1="12" x2="9" y2="3" gradientUnits="userSpaceOnUse">
                                  <stop stop-color="#F0B90B"></stop>
                                  <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                              </defs>
                            </svg>
                            <div class="optn-box-txt">
                              <div class="p-bold">Related Parties</div>
                              <div class="p-light">Add related entity parties</div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="optn-arrow">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                            </svg>
                          </div>
                          <div class="optn-box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="optn-box-svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.014 21H20a2 2 0 002-2V3H6v15.857c0 1.179-.889 2.135-1.987 2.143zM8 11h5v6H8v-6zm12 0h-5v2h5v-2zm-5 4h5v2h-5v-2z" fill="url(#news-g_svg__paint0_linear)"></path>
                              <path d="M18 8h-8V6h8v2zM2 18.857V9h4v9.857C6 20.041 5.105 21 4 21s-2-.96-2-2.143z" fill="#76808F"></path>
                              <defs>
                                <linearGradient id="news-g_svg__paint0_linear" x1="16.5" y1="13.5" x2="16.5" y2="2" gradientUnits="userSpaceOnUse">
                                  <stop stop-color="#F0B90B"></stop>
                                  <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                              </defs>
                            </svg>
                            <!--Sir Provide Task for working start  Today Work 1/11/22-->
                            <a href="https://www.wealthmark.io/en/demoo2">
                            <div class="optn-box-txt">
                              <div class="p-bold">Upload Documents Work for Testting</div>
                              <div class="p-light">Upload required documents</div>
                            </div>
                            </a>
                            <!--Sir Provide Task for working end 1/11/22-->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="optn-arrow">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                            </svg>
                          </div>
                          <div class="optn-box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="optn-box-svg">
                              <circle r="10" transform="matrix(1 0 0 -1 12 12)" fill="url(#payment-g_svg__paint0_linear)"></circle>
                              <path d="M13.088 20v-1.782c2.468-.408 3.62-1.949 3.62-3.768 0-1.893-1.244-2.951-3.843-3.545V7.824c.89.204 1.485.612 1.93 1.113l1.69-1.522c-.817-.928-1.912-1.503-3.397-1.67V4h-2.116v1.745c-2.395.278-3.675 1.578-3.675 3.526 0 1.8 1.132 3.026 3.916 3.601v3.341c-1.04-.148-1.912-.65-2.617-1.392l-1.67 1.522c.927 1.021 2.171 1.782 4.046 1.95V20h2.116zM9.858 9.197c0-.724.408-1.225 1.355-1.41v2.747c-.947-.26-1.355-.631-1.355-1.337zm4.288 5.457c0 .706-.409 1.281-1.281 1.522v-2.932c1.058.315 1.28.872 1.28 1.41z" fill="#76808F"></path>
                              <defs>
                                <linearGradient id="payment-g_svg__paint0_linear" x1="10" y1="0" x2="10" y2="20" gradientUnits="userSpaceOnUse">
                                  <stop stop-color="#F0B90B"></stop>
                                  <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                              </defs>
                            </svg>
                            <div class="optn-box-txt">
                              <div class="p-bold">Fiat Enablement (if needed)</div>
                              <div class="p-light">If you wish to use the Fiat service, additional information is required.</div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="optn-arrow">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                            </svg>
                          </div>
                        </div>
                        <div class="btn-div">
                          <button type="button" class="inactive btn-main-yellow">
                            <div class="_btn_text">Submit</div>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="basic_information-div" class="accordion-div" style="display:none">
                  <div class="main-content-box">
                    <div class="leftbox">
                      <div class="left-inner">
                        <div class="border-box"></div>
                        <div class="left-footer"></div>
                      </div>
                    </div>
                    <div class="rightbox">
                      <div class="right-inner">
                        <div>
                          <div class="h1 p-bold  mt-3 mb-5">Basic Information</div>
                          <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="threedotsvg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
                                  </svg> Account Information </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-floating mt-3 mb-3">
                                        <input type="text" class="form-control" placeholder="Entity Name">
                                        <label for="floatingInput">Entity Name</label>
                                      </div>
                                    </div>
                                    <div class="col">
                                      <div class="form-floating mt-3 mb-3">
                                        <input type="text" class="form-control" placeholder="Registration Number">
                                        <label for="floatingInput">Registration Number</label>
                                      </div>
                                    </div>
                                    <div class="col">
                                      <div class="form-floating mt-3 mb-3">
                                        <input type="date" class="form-control" placeholder="Date of Incorporation">
                                        <label for="floatingInput">Date of Incorporation</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="mt-2">
                                    <button class="btn-main-yellow w-auto">
                                      <div class="_btn_text"> Start </div>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="threedotsvg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
                                  </svg> Entity Address </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <div class="row">
                                    <div class="col">
                                      <div class="disable_div d-flex form-control mt-3 mb-3">
                                        <div class="img">
                                          <img src="{{asset('img/Flag_of_India.jpg') }}" class="flag">
                                        </div>
                                        <div class="text">
                                          <span>{{ $jo->$country_code }}</span>
                                        </div>
                                        <div class="iconbox">
                                          <i class="bi bi-caret-down-fill"></i>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col">
                                      <div class="form-floating mt-3 mb-3">
                                        <input type="text" class="form-control" placeholder="City">
                                        <label for="floatingInput">City</label>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-floating mt-3 mb-3">
                                        <input type="text" class="form-control" placeholder="Street Address">
                                        <label for="floatingInput">Street Address</label>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-floating mt-3 mb-3">
                                        <input type="text" class="form-control" placeholder="Zip Code">
                                        <label for="floatingInput">Zip Code</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="mt-2 mb-5">
                                    <div class="p-bold">Operating Business Address</div>
                                    <div class="p-light">The operating business address is the same as the registered address.</div>
                                    <div class="mt-3 mb-3">
                                      <div class="spprt-box">
                                        <label class="spprt-label">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" class="spprt-svgicon addressYes a1">
                                            <circle cx="8" cy="8" r="7.5" stroke="currentColor"></circle>
                                            <circle cx="8" cy="8" r="4" fill="currentColor" style="display:none"></circle>
                                          </svg>
                                          <div class="spprt-inpt_div">Yes <input hidden="" type="radio" type="radio" name="hasKeyAccountManager" value="1" style="clip: rect(0px, 0px, 0px, 0px); position: absolute;">
                                          </div>
                                        </label>
                                      </div>
                                      <div class="spprt-box">
                                        <label class="spprt-label">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" class="spprt-svgicon addressNo a2">
                                            <circle cx="8" cy="8" r="7.5" stroke="currentColor"></circle>
                                            <circle cx="8" cy="8" r="4" fill="currentColor" style="display:none"></circle>
                                          </svg>
                                          <div class="spprt-inpt_div">No <input hidden="" type="radio" type="radio" name="hasKeyAccountManager" value="0" style="clip: rect(0px, 0px, 0px, 0px); position: absolute;">
                                          </div>
                                        </label>
                                      </div>
                                    </div>
                                    <div class="address_same" style="display:none">
                                      <div class="p-light">Please note that the operating business address should be the same as the address in the proof of address for your entity, which is provided on the Upload Document page.</div>
                                    </div>
                                    <div class="address_nosame" style="display:none">
                                      <div class="row">
                                        <div class="col">
                                          <div class="disable_div d-flex form-control mt-3 mb-3">
                                            <div class="img">
                                              <img src="{{asset('img/Flag_of_India.jpg') }}" class="flag">
                                            </div>
                                            <div class="text">
                                              <span>{{ $jo->$country_code }}</span>
                                            </div>
                                            <div class="iconbox">
                                              <i class="bi bi-caret-down-fill"></i>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col">
                                          <div class="form-floating mt-3 mb-3">
                                            <input type="text" class="form-control" placeholder="City">
                                            <label for="floatingInput">City</label>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="form-floating mt-3 mb-3">
                                            <input type="text" class="form-control" placeholder="Street Address">
                                            <label for="floatingInput">Street Address</label>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="form-floating mt-3 mb-3">
                                            <input type="text" class="form-control" placeholder="Zip Code">
                                            <label for="floatingInput">Zip Code</label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div>
                                    <button class="btn-main-yellow w-auto">
                                      <div class="_btn_text"> Start </div>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="threedotsvg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
                                  </svg> Source Declaration </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <div class="form-floating mt-3 mb-3">
                                    <input type="text" class="form-control" placeholder="Source of Capital">
                                    <label for="floatingInput">Source of Capital</label>
                                    <p class="p-light">How your entity obtained your initial capital</p>
                                  </div>
                                  <div class="form-floating mt-3 mb-3">
                                    <input type="text" class="form-control" placeholder="Source of Wealth">
                                    <label for="floatingInput">Source of Wealth</label>
                                    <p class="p-light">The origin of the entire wealth of your entity</p>
                                  </div>
                                  <div class="form-floating mt-3 mb-3">
                                    <input type="text" class="form-control" placeholder="Source of Funds">
                                    <label for="floatingInput">Source of Funds</label>
                                    <p class="p-light">Origin of the particular funds that are being used to fund your binance account</p>
                                  </div>
                                  <div>
                                    <button class="btn-main-yellow w-auto">
                                      <div class="_btn_text"> Start </div>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="threedotsvg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
                                  </svg> Additional Information </button>
                              </h2>
                              <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <div class="input-number-group">
                                    <div class="mb-3">
                                      <input type="tel" id="txtPhone" class="form-control" name="mobile" placeholder="Mobile No" />
                                    </div>
                                    <div class="form-floating mb-3">
                                      <input type="text" class="form-control" id="number" placeholder="Phone Number">
                                      <label for="floatingInput">Mobile Number</label>
                                    </div>
                                  </div>
                                  <div class="form-floating mt-3 mb-3">
                                    <input type="text" class="form-control" placeholder="Company Website (if have)">
                                    <label for="floatingInput">Company Website (if have)</label>
                                    <p class="p-light">Ensure the website you provide is accessible. If the company doesn't have a website, please put "N/A" here</p>
                                  </div>
                                  <div>
                                    <button class="btn-main-yellow w-auto">
                                      <div class="_btn_text"> Start </div>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="mt-3">
                            <button class="btn-main-yellow inactive">
                              <div class="_btn_text"> Complete</div>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="Related-Parties-div" class="accordion-div" style="display:none">
                  <div class="main-content-box">
                    <div class="leftbox">
                      <div class="left-inner">
                        <div class="border-box"></div>
                        <div class="left-footer"></div>
                      </div>
                    </div>
                    <div class="rightbox">
                      <div class="right-inner">
                        <div>
                          <div class="h1 p-bold  mt-3 mb-5">Related Parties</div>
                          <div class="mt-2">
                            <div class="accordion">
                              <div class="accordion__header is-active">
                                <h2>
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="threedotsvg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
                                  </svg> Director(s) or Equivalent Persons
                                </h2>
                                <span class="accordion__toggle"></span>
                              </div>
                              <div class="accordion__body is-active">
                                <div class="mt-3">
                                  <div class="p-light">Please add the information of all directors here. </div>
                                  <div class="add-detail">
                                    <div class="add-detail-inner">
                                        <div class="add-detail-inner-box">
                                        <div class="added_user">
                                         <div class="added_user-inner">
                                           <div class="delete-btn-div">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="delete-user-btn modal-trigger" data-modal="delete_box_modal">
                                               <path d="M11.94 2.005a9.995 9.995 0 10.01 19.99 9.995 9.995 0 00-.01-19.99zm4.66 13.17l-1.42 1.41-3.17-3.17-3.18 3.17-1.42-1.41 3.18-3.18-3.18-3.18 1.42-1.42 3.18 3.18 3.17-3.18 1.42 1.42-3.18 3.18 3.18 3.18z" fill="currentColor"></path>
                                             </svg>
                                           </div>
                                           <div class="added_user-icon-div">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" fill="none" class="added_user-icon">
                                               <path fill="#76808F" d="M36 54h24v30H36z"></path>
                                               <path d="M36 54h-8c-8.837 0-16 7.163-16 16v14h24V54z" fill="url(#partner-account-light_svg__paint0_linear_24482_26505)"></path>
                                               <path d="M60 84h24V70c0-8.837-7.163-16-16-16h-8v30z" fill="url(#partner-account-light_svg__paint1_linear_24482_26505)"></path>
                                               <path d="M60 54v10L50 54h10zM36 54v10l10-10H36zM46 54h4v30h-4zM47.998 10c9.941 0 18 8.06 18 18 0 9.942-8.059 18.001-18 18.001s-18-8.06-18-18.001 8.059-18 18-18z" fill="#E6E8EA"></path>
                                               <defs>
                                                 <linearGradient id="partner-account-light_svg__paint0_linear_24482_26505" x1="48" y1="84" x2="48" y2="54" gradientUnits="userSpaceOnUse">
                                                   <stop stop-color="#929AA5"></stop>
                                                   <stop offset="1" stop-color="#76808F"></stop>
                                                 </linearGradient>
                                                 <linearGradient id="partner-account-light_svg__paint1_linear_24482_26505" x1="48" y1="84" x2="48" y2="54" gradientUnits="userSpaceOnUse">
                                                   <stop stop-color="#929AA5"></stop>
                                                   <stop offset="1" stop-color="#76808F"></stop>
                                                 </linearGradient>
                                               </defs>
                                             </svg>
                                             <div  class="user_des-div">
                                               <div  class="user_detail">a l</div>

                                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="edit_user modal-trigger" data-modal="added_user_modal">
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M15.336 4.776l3.89 3.889-1.768 1.767-3.89-3.889 1.768-1.767zm-3.181 3.181l3.889 3.89-5.129 5.128H20v3H7.915l-.004.003H4.022V16.09l8.133-8.132z" fill="currentColor"></path>
                                               </svg>
                                             </div>
                                           </div>
                                         </div>
                                       </div>
                                      </div>
                                      <div class="add-detail-inner-box">
                                        <div class="add-detail-modal modal-trigger" data-modal="Add-Director">
                                          <div class="add-detail-plus">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="svg-plus-icon">
                                              <path d="M13.5 3h-3v7.5H3v3h7.5V21h3v-7.5H21v-3h-7.5V3z" fill="currentColor"></path>
                                            </svg>
                                            <div class="text">Add</div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="add-detail">
                                  <button type="button" class="inactive btn-main-yellow w-auto">
                                    <div>
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="optn-box-svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                                      </svg>Confirm
                                    </div>
                                  </button>
                                  <button type="button" class="btn-no-border">
                                    <div>Save as Draft </div>
                                  </button>
                                </div>
                                <div class="divider-line"></div>
                              </div>
                              <div class="accordion__header">
                                <h2>
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="threedotsvg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
                                  </svg> Ultimate Beneficial Owner(s) (if any)
                                </h2>
                                <span class="accordion__toggle"></span>
                              </div>
                              <div class="accordion__body">
                               <div class="mt-3">
                                  <div class="p-light">Please add the information of all directors here. </div>
                                  <div class="add-detail">
                                    <div class="add-detail-inner">

                                      <div class="add-detail-inner-box">
                                        <div class="add-detail-modal modal-trigger" data-modal="Add-Ultimate-Beneficial">
                                          <div class="add-detail-plus">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="svg-plus-icon">
                                              <path d="M13.5 3h-3v7.5H3v3h7.5V21h3v-7.5H21v-3h-7.5V3z" fill="currentColor"></path>
                                            </svg>
                                            <div class="text">Add</div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>



                                <div class="add-detail">
                                  <button type="button" class="inactive btn-main-yellow w-auto">
                                    <div>
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="optn-box-svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                                      </svg>Confirm
                                    </div>
                                  </button>
                                  <button type="button" class="btn-no-border">
                                    <div>Save as Draft </div>
                                  </button>
                                </div>
                                <div class="divider-line"></div>

                              </div>
                              <!------------------------------------------------------------------------------------->
                              <div class="accordion__header">
                                <h2>
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="threedotsvg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
                                  </svg> Significant Controller(s)
                                </h2>
                                <span class="accordion__toggle"></span>
                              </div>
                              <div class="accordion__body">
                                    <div class="mt-3">
                                      <p class="p-bold"> Please add the information of all significant controllers here.</p>
                                     <p class="p-light">  Control Person is defined as :</p>
                                        <label class="label-text">   1) Any person able to exercise significant or effective influence over the management of the company or partnership who are neither a shareholder nor director (e.g. CEO)</label>

                                        <label class="label-text">     2) Any person entitled to or controls directly or indirectly not less than a 25% share of the capital or profits of the company or partnership</label>

                                         <label class="label-text">    3) Any person directly or indirectly entitled to exercise or control the exercise of more than 25% of the voting power in the company or who is able to exercise significant influence over the management of the company</label>

                                    </div>
                                    <div class="add-detail-inner-box">
                                        <div class="add-detail-modal modal-trigger" data-modal="Add_Significant_Controller">
                                          <div class="add-detail-plus">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="svg-plus-icon">
                                              <path d="M13.5 3h-3v7.5H3v3h7.5V21h3v-7.5H21v-3h-7.5V3z" fill="currentColor"></path>
                                            </svg>
                                            <div class="text">Add</div>
                                          </div>
                                        </div>
                                      </div>
                          <div class="add-detail">
                                  <button type="button" class="inactive btn-main-yellow w-auto">
                                    <div>
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="optn-box-svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                                      </svg>Confirm
                                    </div>
                                  </button>
                                  <button type="button" class="btn-no-border">
                                    <div>Save as Draft </div>
                                  </button>
                                </div>
                          <div class="divider-line"></div>

                              </div>
                              <div class="accordion__header">
                                <h2>
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="threedotsvg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
                                  </svg> Authorised Account Trader
                                </h2>
                                <span class="accordion__toggle"></span>
                              </div>
                              <div class="accordion__body">

                                   <div class="mt-3">

                                     <p class="p-light">  Please add the information of all authorized account traders. For Binance Pay merchants/partners, we need authorized signatories/person information.</p>

                                    </div>
                                    <div class="add-detail-inner-box">
                                        <div class="add-detail-modal modal-trigger" data-modal="Add_Authorised_Account">
                                          <div class="add-detail-plus">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="svg-plus-icon">
                                              <path d="M13.5 3h-3v7.5H3v3h7.5V21h3v-7.5H21v-3h-7.5V3z" fill="currentColor"></path>
                                            </svg>
                                            <div class="text">Add</div>
                                          </div>
                                        </div>
                                      </div>
                          <div class="add-detail">
                                  <button type="button" class="inactive btn-main-yellow w-auto">
                                    <div>
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="optn-box-svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                                      </svg>Confirm
                                    </div>
                                  </button>
                                  <button type="button" class="btn-no-border">
                                    <div>Save as Draft </div>
                                  </button>
                                </div>
                          <div class="divider-line"></div>



                              </div>
                              <div class="accordion__header">
                                <h2>
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="threedotsvg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
                                  </svg> Main Trader Verification
                                </h2>
                                <span class="accordion__toggle"></span>
                              </div>
                              <div class="accordion__body">


                                <div class="divider-line"></div>


                              </div>
                              <div class="accordion__header">
                                <h2>
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="threedotsvg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
                                  </svg> Upload Letter of Authorization
                                </h2>
                                <span class="accordion__toggle"></span>
                              </div>
                              <div class="accordion__body">
                           <label class="label-text" >The Letter of Authorization is used to provide written confirmation of the authorized personnel(s) who will be permitted to access Binance’s services on behalf of the entity.</label>
                            <label class="label-text" >Step 1: Generate Letter of Authorization template</label>
                            <label class="label-text" >  1) Please use the Binance template if required. </label>
                            <label class="label-text" >  2) Kindly ensure that all authorized traders have been updated in the Related Parties section</label>
                            <label class="label-text" > 3) Click "Generate Template" to generate a pre-populated letter of authorization for your entity</label>

                            <div class="mt-3 mb-2">
                                <button class="generate-btn">Generate Template</button>
                            </div>

                                <label class="label-text" >Step 2: Upload Signed Letter of Authorization</label>
                                <label class="label-text" >1) Generate the template of letter of authorization and have the appropriate quorum of directors provide signoff and upload it here</label>
                                <label class="label-text" >2) For Binance Pay merchants/partners - Provide a Resolution of Board of Directors authorizing the list of person(s) authorized to act on behalf of the customer</label>
                                <label class="label-text" >3) A Valid Company Board Resolution with clear delegation of authority can be uploaded in lieu of the letter of authorization </label>

                                <form action="#">
                                  <div class="mt-4">

                                      <div class="upld-btn-div">
                                        <div class="upld-btn-outer">
                                          <div class="upld-btn-inner">
                                            <button  type="button" class="generate-btn">
                                              <input type="file" name="files" accept=".pdf,.jpg,.jpeg,.png" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="upld-icon">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.224 6V3h8.5v3h-5.5v12h5.5v3h-8.5V6zm5.368 7.5v-3h6.587V5.984L21.21 12l-6.03 5.98V13.5H8.592z" fill="currentColor"></path>
                                              </svg>Upload </button>
                                          </div>
                                        </div>
                                      </div>

                                  </div>
                                  <div class="confirm-btn-div">
                                    <button  name="" type="button" form="" class="inactive confirm-btn">
                                      <div class="confirm-inner">
                                        <div class="confirm-in">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="upld-icon">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                                          </svg>Confirm
                                        </div>
                                      </div>
                                    </button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          <div class="mt-3">
                            <button class="btn-main-yellow inactive">
                              <div class="_btn_text"> Complete</div>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal custom_modal" id="verify_process">
                  <div class="modal-sandbox"></div>
                  <div class="modal-box" style="max-width:850px;">
                    <div class="modal-header">
                      <div class="modal-icons">
                        <span class="btn-back" id="back_start">
                          <i class="bi bi-arrow-left"></i>
                        </span>
                        <span class="close-modal">
                          <i class="bi bi-x"></i>
                        </span>
                      </div>
                      <div class="modal_heading">Here is your checklist of documents </div>
                    </div>
                    <div class="modal-body text-start">
                      <div class="style-dialog-body checklist_box">
                        <div class="checklist_header">
                          <div class="checklist-flex">Select the document(s) you have prepared. Please note that you see optional documents and details of the required documents by downloading the checklist.</div>
                          <div class="print-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="print-svg">
                              <path d="M3 5.5A2.5 2.5 0 005.5 8H21v13H6a3 3 0 01-3-3V5.5z" fill="url(#wallet-g_svg__paint0_linear)"></path>
                              <path d="M5.5 3H21v5H5.5a2.5 2.5 0 010-5zM21 12v5h-5v-5h5z" fill="#76808F"></path>
                              <defs>
                                <linearGradient id="wallet-g_svg__paint0_linear" x1="12" y1="21" x2="12" y2="5.5" gradientUnits="userSpaceOnUse">
                                  <stop stop-color="#F0B90B"></stop>
                                  <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                              </defs>
                            </svg>
                            <div class="print-text">Print Full List</div>
                          </div>
                        </div>
                        <div class="checklist-content-box">
                          <div class="mt-4">
                            <div class="p-bold">Entity Documents</div>
                            <div class="checklist-half-width">
                              <label class="checklist-label">
                                <div class="checklist-icon">
                                  <input type="checkbox" type="checkbox" hidden="" data-indeterminate="false" class="checklist-input">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" aria-hidden="true" data-indeterminate="false" class="checklist-ssvg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                                  </svg>
                                </div>
                                <div class="checklist-text">Legislation / Government Website / Act of Parliament or equivalent to demonstrate Government body status</div>
                              </label>
                              <label class="checklist-label">
                                <div class="checklist-icon">
                                  <input type="checkbox" type="checkbox" hidden="" data-indeterminate="false" class="checklist-input">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" aria-hidden="true" data-indeterminate="false" class="checklist-ssvg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                                  </svg>
                                </div>
                                <div class="checklist-text">Legislation / Government Website / Act of Parliament or equivalent to demonstrate Government body status</div>
                              </label>
                            </div>
                          </div>
                          <div class="mt-4">
                            <div class="p-bold">Related Parties’ Documents</div>
                            <label class="checklist-fulll-width">
                              <div class="checklist-icon">
                                <input type="checkbox" type="checkbox" hidden="" data-indeterminate="false" class="checklist-input">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" aria-hidden="true" data-indeterminate="false" class="checklist-ssvg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                                </svg>
                              </div>
                              <div class="checklist-text">Identity document (ID/passport images) or Proof of Address (utility bills, bank statements) of significant related parties.</div>
                            </label>
                          </div>
                        </div>
                        <div class="checklist-footer">
                          <div class="color-lightgray">
                            <div class="large-text">0</div>% of your documents prepared
                          </div>
                          <button class="btn-main-yellow w-auto" id="btn_basic_detail">
                            <div class="_btn_text">Start</div>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
<!--------------------------------------------------------------------------------->
<div class="modal custom_modal" id="Add-Director">
  <div class="modal-sandbox"></div>
  <div class="modal-box" style="max-width:850px;">
    <div class="modal-header">
      <div class="modal-icons">
        <span class="btn-back" id="back_start">
          <i class="bi bi-arrow-left"></i>
        </span>
        <span class="close-modal">
          <i class="bi bi-x"></i>
        </span>
      </div>
      <div class="modal_heading">Add Director(s) or Equivalent Persons </div>
    </div>
    <div class="modal-body text-start">
      <div class="main-heading">Select Type</div>
      <div class="mb-5">
        <div class="radio-div">
          <input type="radio" type="radio" name="select" value="individual" checked="" class="radio-btns" id="Individual"> Individual
        </div>
        <div class="radio-div">
          <input type="radio" type="radio" name="select" value="entity" class="radio-btns" id="Entity"> Entity
        </div>
      </div>
      <form action="#" style="width: 100%;">
        <div class="form-inner Individual scrollbar-style">
          <div class="d-column">
            <label class="label-text">Basic Information</label>
            <div class="column3">
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Email address</label>
              </div>
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Middle Name</label>
              </div>
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Last Name</label>
              </div>
            </div>
            <div class="">
              <div class="input-group date" id="datepicker">
                <input type="text" class="form-control" name="dob" id="date" placeholder="Enter your DOB" />
                <span class="input-group-append">
                  <span class="input-group-text bg-light">
                    <i class="bi bi-calendar-fill"></i>
                  </span>
                </span>
              </div>
            </div>
            <div class="mt-3">
              <div class="d-flex justify-content-between">
                <label class="label-text">Jurisdiction</label>
                <div class="multiple-text d-flex align-items-center">
                  <input type="checkbox" type="checkbox" id="multipleCitizenship" class="radio-btns"> Multiple Citizenship
                </div>
              </div>
              <div class="mt-1">
                <select id="select_multi_country" class="selectpicker countrypicker form-control" data-flag="true" data-live-search="true" multiple></select>
              </div>
            </div>
            <div class="mt-3">
              <label class="label-text">Basic Information</label>
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Country of Residence</label>
              </div>
            </div>
            <div class="mt-3">
              <label class="label-text">Upload Identification Documents</label>
              <div class="form group mt-3">
                <label class="label-text">Country/Region of Issue</label>
                <select id="Region_of_Issue" class="selectpicker countrypicker form-control" data-live-search="true" data-flag="true" multiple></select>
              </div>
            </div>
            <div class="mt-3">
              <label class="label-text">Select Document Type</label>
              <div class="form-group d-flex doc-type mt-2">
                <div class="passport d-flex align-items-center">
                  <input type="radio" id="passport" class="radio-btns"> Passport
                </div>
                <div class="aadhar d-flex align-items-center">
                  <input type="radio" id="aadhar" class="radio-btns"> Aadhar Card
                </div>
                <div class="passport d-flex align-items-center">
                  <input type="radio" id="passport" class="radio-btns"> Id Card
                </div>
              </div>
            </div>
            <div class="form group mt-3">
              <label class="label-text">Identification Number</label>
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Identification Number</label>
              </div>
            </div>
            <div class="doc-instractions">
              <label class="label-text">Upload Document Photos</label>
              <ul class="instractions">
                <li>Upload in the natural colorful forms instead of a scan/edited copy</li>
                <li>Please make sure you taken all 4 corners of the document</li>
                <li>Please make sure your ID document is valid and not expired</li>
              </ul>
            </div>
            <div class="upl-doc">
              <div class="upl-doc-inner">
                <div class="inner-doc">
                  <div class="upld-main">
                    <div class="upld-text">Click or drag and drop to attach ID front</div>
                    <div class="icon-div">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="icon-upl">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 7.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM13.5 11a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" fill="#76808F"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 4h20v16H2V4zm2 2v7.586l3-3L14.414 18H20V6H4zm0 12v-1.586l3-3L11.586 18H4z" fill="#76808F"></path>
                      </svg>
                      <div class="attach">Attach Image</div>
                    </div>
                    <div class="img-types">Max 5 MB in .jpg/.jpeg/.png/.pdf format</div>
                  </div>
                </div>
                <input name="front" type="file" accept="image/jpg,image/jpeg,image/png,application/pdf" multiple="" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
              </div>
              <div class="upl-doc-inner">
                <div class="inner-doc">
                  <div class="upld-main">
                    <div class="upld-text">Click or drag and drop to attach ID back</div>
                    <div class="icon-div">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="icon-upl">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 7.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM13.5 11a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" fill="#76808F"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 4h20v16H2V4zm2 2v7.586l3-3L14.414 18H20V6H4zm0 12v-1.586l3-3L11.586 18H4z" fill="#76808F"></path>
                      </svg>
                      <div class="attach">Attach Image</div>
                    </div>
                    <div class="img-types">Max 5 MB in .jpg/.jpeg/.png/.pdf format</div>
                  </div>
                </div>
                <input name="back" type="file" accept="image/jpg,image/jpeg,image/png,application/pdf" multiple="" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
              </div>
            </div>
          </div>
        </div>
        <div class="form-inner Entity scrollbar-style" style="display:none">
          <div class="d-column">
            <label class="label-text">Basic Information</label>
            <div class="column2">
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Company Name</label>
              </div>
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Company Registered Number</label>
              </div>
            </div>
            <label class="label-text">Please fill in the Entity Name and Registration Number exactly as they appear on the Certificate of Incorporation.</label>
            <div class="mt-3">
              <div class="d-flex justify-content-between">
                <label class="label-text">Country of Incorporation</label>
              </div>
              <div class="mt-1">
                <select id="select_multi_country" class="selectpicker countrypicker form-control" data-flag="true" data-live-search="true"></select>
              </div>
            </div>
            <div class="mt-3">
              <label class="label-text">Director(s) or Equivalent Persons</label>
              <label class="label-text">At least 1 record must be added. You can add up to 10.</label>
              <div class="upld-btn-div-outer">
                <div class="upld-btn-div-inner modal-trigger" data-modal="Entity-Add-Director">
                  <div class="upld-btn-div">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="upld-btn-icon">
                      <path d="M13.5 3h-3v7.5H3v3h7.5V21h3v-7.5H21v-3h-7.5V3z" fill="currentColor"></path>
                    </svg>
                    <div class="upld-btn-text">Add</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="modal-footer mt-5">
      <div class="footer-div-btn">
        <button class="modal_btn_theme">Submit</button>
        <button class="btn bg-whitesmoke">Cancel </button>
      </div>
    </div>
  </div>
  <div class="modal custom_modal" id="Entity-Add-Director">
    <div class="modal-box" style="top:10px">
      <div class="modal-header">
        <div class="modal-icons">
          <span class="btn-back" id="back_start">
            <i class="bi bi-arrow-left"></i>
          </span>
          <span class="close-Entity-Add-Director">
            <i class="bi bi-x"></i>
          </span>
        </div>
        <div class="modal_heading">Add Director(s) or Equivalent Persons </div>
      </div>
      <div class="modal-body text-start">
        <form action="#" style="width: 100%;">
          <div class="form-inner Individual-pop scrollbar-style">
            <div class="d-column">
              <label class="label-text">Basic Information</label>
              <div class="column3">
                <div class="form-floating mb-3 clearable-input">
                  <input type="text" class="form-control searchinput" placeholder="demo">
                  <label>Email address</label>
                </div>
                <div class="form-floating mb-3 clearable-input">
                  <input type="text" class="form-control searchinput" placeholder="demo">
                  <label>Middle Name</label>
                </div>
                <div class="form-floating mb-3 clearable-input">
                  <input type="text" class="form-control searchinput" placeholder="demo">
                  <label>Last Name</label>
                </div>
              </div>
              <div class="">
                <div class="input-group date" id="datepicker">
                  <input type="text" class="form-control" name="dob" id="date" placeholder="Enter your DOB" />
                  <span class="input-group-append">
                    <span class="input-group-text bg-light">
                      <i class="bi bi-calendar-fill"></i>
                    </span>
                  </span>
                </div>
              </div>
              <div class="mt-3">
                <div class="d-flex justify-content-between">
                  <label class="label-text">Jurisdiction</label>
                  <div class="multiple-text d-flex align-items-center">
                    <input type="checkbox" type="checkbox" id="multipleCitizenship" class="radio-btns"> Multiple Citizenship
                  </div>
                </div>
                <div class="mt-1">
                  <select id="select_multi_country" class="selectpicker countrypicker form-control" data-flag="true" data-live-search="true" multiple></select>
                </div>
              </div>
              <div class="mt-3">
                <label class="label-text">Basic Information</label>
                <div class="form-floating mb-3 clearable-input">
                  <input type="text" class="form-control searchinput" placeholder="demo">
                  <label>Country of Residence</label>
                </div>
              </div>
              <div class="mt-3">
                <label class="label-text">Upload Identification Documents</label>
                <div class="form group mt-3">
                  <label class="label-text">Country/Region of Issue</label>
                  <select id="Region_of_Issue" class="selectpicker countrypicker form-control" data-live-search="true" data-flag="true" multiple></select>
                </div>
              </div>
              <div class="mt-3">
                <label class="label-text">Select Document Type</label>
                <div class="form-group d-flex doc-type mt-2">
                  <div class="passport d-flex align-items-center">
                    <input type="radio" id="passport" class="radio-btns"> Passport
                  </div>
                  <div class="aadhar d-flex align-items-center">
                    <input type="radio" id="aadhar" class="radio-btns"> Aadhar Card
                  </div>
                  <div class="passport d-flex align-items-center">
                    <input type="radio" id="passport" class="radio-btns"> Id Card
                  </div>
                </div>
              </div>
              <div class="form group mt-3">
                <label class="label-text">Identification Number</label>
                <div class="form-floating mb-3 clearable-input">
                  <input type="text" class="form-control searchinput" placeholder="demo">
                  <label>Identification Number</label>
                </div>
              </div>
              <div class="doc-instractions">
                <label class="label-text">Upload Document Photos</label>
                <ul class="instractions">
                  <li>Upload in the natural colorful forms instead of a scan/edited copy</li>
                  <li>Please make sure you taken all 4 corners of the document</li>
                  <li>Please make sure your ID document is valid and not expired</li>
                </ul>
              </div>
              <div class="upl-doc">
                <div class="upl-doc-inner">
                  <div class="inner-doc">
                    <div class="upld-main">
                      <div class="upld-text">Click or drag and drop to attach ID front</div>
                      <div class="icon-div">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="icon-upl">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M15 7.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM13.5 11a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" fill="#76808F"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M2 4h20v16H2V4zm2 2v7.586l3-3L14.414 18H20V6H4zm0 12v-1.586l3-3L11.586 18H4z" fill="#76808F"></path>
                        </svg>
                        <div class="attach">Attach Image</div>
                      </div>
                      <div class="img-types">Max 5 MB in .jpg/.jpeg/.png/.pdf format</div>
                    </div>
                  </div>
                  <input name="front" type="file" accept="image/jpg,image/jpeg,image/png,application/pdf" multiple="" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                </div>
                <div class="upl-doc-inner">
                  <div class="inner-doc">
                    <div class="upld-main">
                      <div class="upld-text">Click or drag and drop to attach ID back</div>
                      <div class="icon-div">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="icon-upl">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M15 7.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM13.5 11a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" fill="#76808F"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M2 4h20v16H2V4zm2 2v7.586l3-3L14.414 18H20V6H4zm0 12v-1.586l3-3L11.586 18H4z" fill="#76808F"></path>
                        </svg>
                        <div class="attach">Attach Image</div>
                      </div>
                      <div class="img-types">Max 5 MB in .jpg/.jpeg/.png/.pdf format</div>
                    </div>
                  </div>
                  <input name="back" type="file" accept="image/jpg,image/jpeg,image/png,application/pdf" multiple="" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer mt-5">
        <div class="footer-div-btn">
          <button class="modal_btn_theme">Submit</button>
          <button class="btn bg-whitesmoke close-Entity-Add-Director">Cancel </button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal custom_modal" id="added_user_modal">
  <div class="modal-sandbox"></div>
  <div class="modal-box" style="max-width:850px;">
    <div class="modal-header">
      <div class="modal-icons">
        <span class="btn-back" id="back_start">
          <i class="bi bi-arrow-left"></i>
        </span>
        <span class="close-modal">
          <i class="bi bi-x"></i>
        </span>
      </div>
      <div class="modal_heading">Add Director(s) or Equivalent Persons </div>
    </div>
    <div class="modal-body text-start">

      <form action="#" style="width: 100%;">
        <div class="form-inner Individual scrollbar-style">
          <div class="d-column">
            <label class="label-text">Basic Information</label>
            <div class="column3">
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Email address</label>
              </div>
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Middle Name</label>
              </div>
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Last Name</label>
              </div>
            </div>
            <div class="">
              <div class="input-group date" id="datepicker">
                <input type="text" class="form-control" name="dob" id="date" placeholder="Enter your DOB" />
                <span class="input-group-append">
                  <span class="input-group-text bg-light">
                    <i class="bi bi-calendar-fill"></i>
                  </span>
                </span>
              </div>
            </div>
            <div class="mt-3">
              <div class="d-flex justify-content-between">
                <label class="label-text">Jurisdiction</label>
                <div class="multiple-text d-flex align-items-center">
                  <input type="checkbox" type="checkbox" id="multipleCitizenship" class="radio-btns"> Multiple Citizenship
                </div>
              </div>
              <div class="mt-1">
                <select id="select_multi_country" class="selectpicker countrypicker form-control" data-flag="true" data-live-search="true" multiple></select>
              </div>
            </div>
            <div class="mt-3">
              <label class="label-text">Basic Information</label>
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Country of Residence</label>
              </div>
            </div>
            <div class="mt-3">
              <label class="label-text">Upload Identification Documents</label>
              <div class="form group mt-3">
                <label class="label-text">Country/Region of Issue</label>
                <select id="Region_of_Issue" class="selectpicker countrypicker form-control" data-live-search="true" data-flag="true" multiple></select>
              </div>
            </div>
            <div class="mt-3">
              <label class="label-text">Select Document Type</label>
              <div class="form-group d-flex doc-type mt-2">
                <div class="passport d-flex align-items-center">
                  <input type="radio" id="passport" class="radio-btns"> Passport
                </div>
                <div class="aadhar d-flex align-items-center">
                  <input type="radio" id="aadhar" class="radio-btns"> Aadhar Card
                </div>
                <div class="passport d-flex align-items-center">
                  <input type="radio" id="passport" class="radio-btns"> Id Card
                </div>
              </div>
            </div>
            <div class="form group mt-3">
              <label class="label-text">Identification Number</label>
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Identification Number</label>
              </div>
            </div>
            <div class="doc-instractions">
              <label class="label-text">Upload Document Photos</label>
              <ul class="instractions">
                <li>Upload in the natural colorful forms instead of a scan/edited copy</li>
                <li>Please make sure you taken all 4 corners of the document</li>
                <li>Please make sure your ID document is valid and not expired</li>
              </ul>
            </div>

             <div class="file-encrypted-div">

                      <div class="encrypted-div">
                        <div class="encrypted-main">
                          <div class="encrypted-inner">
                            <div class="encrypted-inner-left">
                              <div  class="encrypted-inner-text">The file has been uploaded and is being encrypted</div>
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="encrypted-inner-svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7 8v2H5v11h14V10h-2V8A5 5 0 007 8zm7.5 2V8a2.5 2.5 0 00-5 0v2h5zm-1 8v-5h-3v5h3z" fill="currentColor"></path>
                              </svg>
                            </div>
                            <div class="encrypted-inner-right">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="encrypted-inner-svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.997 12.21a8.161 8.161 0 000-.42v.42zm-4.463 3.327l-2.608-2.608h7.07V20l-2.341-2.342A8.003 8.003 0 014.252 14h3.164a5.001 5.001 0 008.118 1.537zM19.747 10A8.003 8.003 0 006.343 6.343L4.001 4v7.071h7.07L8.466 8.464A5.001 5.001 0 0116.585 10h3.162zM4 12L4 11.845v.31A8.126 8.126 0 014 12z" fill="currentColor"></path>
                              </svg>

                            </div>
                          </div>
                        </div>
                        <input name="front" type="file" accept="image/jpg,image/jpeg,image/png,application/pdf" multiple="" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                      </div>

                    </div>
        </div>
       </div>
      </form>
    </div>
    <div class="modal-footer mt-5">
      <div class="footer-div-btn">
        <button class="modal_btn_theme">Submit</button>
        <button class="btn bg-whitesmoke">Cancel </button>
      </div>
    </div>
  </div>
  </div>
<div class="modal custom_modal" id="delete_box_modal">
  <div class="modal-sandbox"></div>
  <div class="modal-box" style="max-width:350px;">
    <div class="text-center p-3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" fill="none" class="warning-icon"><path fill-rule="evenodd" clip-rule="evenodd" d="M88 48c0 22.091-17.909 40-40 40S8 70.091 8 48 25.909 8 48 8s40 17.909 40 40z" fill="url(#general-warning_svg__paint0_linear_22059_28207)"></path><path d="M48 19c16.016 0 29 12.984 29 29S64.016 77 48 77 19 64.016 19 48s12.984-29 29-29z" fill="url(#general-warning_svg__paint1_linear_22059_28207)"></path><path d="M45 66h6v-6h-6v6zM51 54V30h-6v24h6z" fill="#14151A"></path><defs><linearGradient id="general-warning_svg__paint0_linear_22059_28207" x1="8" y1="48" x2="102.5" y2="48" gradientUnits="userSpaceOnUse"><stop stop-color="#F0B90B" stop-opacity="0"></stop><stop offset="1" stop-color="#F0B90B"></stop></linearGradient><linearGradient id="general-warning_svg__paint1_linear_22059_28207" x1="77" y1="48" x2="19" y2="48" gradientUnits="userSpaceOnUse"><stop stop-color="#F0B90B"></stop><stop offset="1" stop-color="#F8D33A"></stop></linearGradient></defs></svg>
        <p>Are you sure you want to delete this people?</p>
    </div>



    <div class="d-flex justify-content-between p-4 delete-modal-btn">

        <button class="modal_btn_theme">Delete</button>
        <button class="btn bg-whitesmoke" id="cancel-delete">Cancel </button>

    </div>
  </div>

</div>
<div class="modal custom_modal" id="Add-Ultimate-Beneficial">
  <div class="modal-sandbox"></div>
  <div class="modal-box" style="max-width:850px;">
    <div class="modal-header">
      <div class="modal-icons">
        <span class="btn-back" id="back_start">
          <i class="bi bi-arrow-left"></i>
        </span>
        <span class="close-modal">
          <i class="bi bi-x"></i>
        </span>
      </div>
      <div class="modal_heading">Add Ultimate Beneficial Owner(s) (if any)</div>
    </div>
    <div class="modal-body text-start">


      <form action="#" style="width: 100%;">
        <div class="form-inner scrollbar-style">
          <div class="d-column">
            <label class="label-text">Basic Information</label>
            <div class="column3">
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Email address</label>
              </div>
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Middle Name</label>
              </div>
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Last Name</label>
              </div>
            </div>
            <div class="">
              <div class="input-group date" id="datepicker">
                <input type="text" class="form-control" name="dob" id="date" placeholder="Enter your DOB" />
                <span class="input-group-append">
                  <span class="input-group-text bg-light">
                    <i class="bi bi-calendar-fill"></i>
                  </span>
                </span>
              </div>
            </div>
            <div class="mt-3">
              <div class="d-flex justify-content-between">
                <label class="label-text">Jurisdiction</label>
                <div class="multiple-text d-flex align-items-center">
                  <input type="checkbox" type="checkbox" id="multipleCitizenship" class="radio-btns"> Multiple Citizenship
                </div>
              </div>
              <div class="mt-1">
                <select id="select_multi_country" class="selectpicker countrypicker form-control" data-flag="true" data-live-search="true" multiple></select>
              </div>
            </div>
            <div class="mt-3">
              <label class="label-text">Basic Information</label>
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Country of Residence</label>
              </div>
            </div>
            <div class="mt-3">
              <label class="label-text">Upload Identification Documents</label>
              <div class="form group mt-3">
                <label class="label-text">Country/Region of Issue</label>
                <select id="Region_of_Issue" class="selectpicker countrypicker form-control" data-live-search="true" data-flag="true" multiple></select>
              </div>
            </div>
            <div class="mt-3">
              <label class="label-text">Select Document Type</label>
              <div class="form-group d-flex doc-type mt-2">
                <div class="passport d-flex align-items-center">
                  <input type="radio" id="passport" class="radio-btns"> Passport
                </div>
                <div class="aadhar d-flex align-items-center">
                  <input type="radio" id="aadhar" class="radio-btns"> Aadhar Card
                </div>
                <div class="passport d-flex align-items-center">
                  <input type="radio" id="passport" class="radio-btns"> Id Card
                </div>
              </div>
            </div>
            <div class="form group mt-3">
              <label class="label-text">Identification Number</label>
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Identification Number</label>
              </div>
            </div>
            <div class="doc-instractions">
              <label class="label-text">Upload Document Photos</label>
              <ul class="instractions">
                <li>Upload in the natural colorful forms instead of a scan/edited copy</li>
                <li>Please make sure you taken all 4 corners of the document</li>
                <li>Please make sure your ID document is valid and not expired</li>
              </ul>
            </div>
            <div class="upl-doc">
              <div class="upl-doc-inner">
                <div class="inner-doc">
                  <div class="upld-main">
                    <div class="upld-text">Click or drag and drop to attach ID front</div>
                    <div class="icon-div">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="icon-upl">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 7.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM13.5 11a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" fill="#76808F"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 4h20v16H2V4zm2 2v7.586l3-3L14.414 18H20V6H4zm0 12v-1.586l3-3L11.586 18H4z" fill="#76808F"></path>
                      </svg>
                      <div class="attach">Attach Image</div>
                    </div>
                    <div class="img-types">Max 5 MB in .jpg/.jpeg/.png/.pdf format</div>
                  </div>
                </div>
                <input name="front" type="file" accept="image/jpg,image/jpeg,image/png,application/pdf" multiple="" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
              </div>
              <div class="upl-doc-inner">
                <div class="inner-doc">
                  <div class="upld-main">
                    <div class="upld-text">Click or drag and drop to attach ID back</div>
                    <div class="icon-div">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="icon-upl">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 7.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM13.5 11a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" fill="#76808F"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 4h20v16H2V4zm2 2v7.586l3-3L14.414 18H20V6H4zm0 12v-1.586l3-3L11.586 18H4z" fill="#76808F"></path>
                      </svg>
                      <div class="attach">Attach Image</div>
                    </div>
                    <div class="img-types">Max 5 MB in .jpg/.jpeg/.png/.pdf format</div>
                  </div>
                </div>
                <input name="back" type="file" accept="image/jpg,image/jpeg,image/png,application/pdf" multiple="" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
              </div>
            </div>

             <div class="Proof-of-address mt-3 mb-3">
              <label class="label-text">Proof of address</label>
              <ul class="instractions">
                <li>Ensure the PoA documents were issued in the last <span class="text-danger">90</span> days.</li>
                <li>Ensure <span class="text-danger"> full role's name</span> and <span class="text-danger"> full address</span> are reflected on the document.</li>
                <li>We only support a <span class="text-danger"> limited number of document types </span>. Unsupported documents will be rejected.</li>
                <li><b>Bank statements (with transactions history).</b> We accept digital bank statements too but please send us the original .pdf file. Please note that sensitive information, such as transaction details, can be covered.</li>
              <li><b> Utility bills</b>, such as electricity, water, fixed internet, or phone bills (please note that we do not accept mobile phone bills and insurance letters), waste management, etc.</li>
              <li><b>Government documents,</b> such as letters from government agencies, tax bills, etc.</li>
              </ul>
            </div>

               <div class="upld-btn-div">
     <div class="upld-btn-outer">
       <div class="upld-btn-inner">
         <button  type="button" class="generate-btn">
           <input type="file" name="billFile" accept=".pdf,.jpg,.jpeg,.png" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="upld-icon">
             <path fill-rule="evenodd" clip-rule="evenodd" d="M3.224 6V3h8.5v3h-5.5v12h5.5v3h-8.5V6zm5.368 7.5v-3h6.587V5.984L21.21 12l-6.03 5.98V13.5H8.592z" fill="currentColor"></path>
           </svg>Upload </button>
       </div>
     </div>
   </div>
    <div class="mt-3">
                                    <label class="label-text">Confirm Address Document</label>
                                        <label class="label-text"> Fill in details of the document that you have just uploaded</label>
                                        <label class="label-text"> Select Document Type</label>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                    <select class="form-control">
                                                        <option>Utility Bills</option>
                                                        <option>Bank Statement</option>
                                                        <option>Government</option>
                                                        <option>Other</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                      <div class="input-group date" id="datepicker">
                <input type="text" class="form-control" name="dob" id="date" placeholder="Enter your DOB" />
                <span class="input-group-append">
                  <span class="input-group-text bg-light">
                    <i class="bi bi-calendar-fill"></i>
                  </span>
                </span>
              </div>
                                            </div>
                                            <div class="col-md-12 mt-2 mb-2 text-center">
                                                <label class="label-text mb-0">
                                                    Address reflected in the above document
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                 <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Country/Region of Issue</label>
              </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                 <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>
State/Province (if applicable)</label>
              </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                 <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>City</label>
              </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                 <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Zip Code</label>
              </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                 <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Street Address
</label>
              </div>
                                            </div>
                                        </div>
                                </div>


           </div>
        </div>

      </form>
    </div>
    <div class="modal-footer mt-5">
      <div class="footer-div-btn">
        <button class="modal_btn_theme">Submit</button>
        <button class="btn bg-whitesmoke">Cancel </button>
      </div>
    </div>
  </div>

</div>
<div class="modal custom_modal" id="Add_Significant_Controller">
  <div class="modal-sandbox"></div>
  <div class="modal-box" style="max-width:850px;">
    <div class="modal-header">
      <div class="modal-icons">
        <span class="btn-back" id="back_start">
          <i class="bi bi-arrow-left"></i>
        </span>
        <span class="close-modal">
          <i class="bi bi-x"></i>
        </span>
      </div>
      <div class="modal_heading">Add Significant Controller(s)</div>
    </div>
    <div class="modal-body text-start">

      <form action="#" style="width: 100%;">
        <div class="form-inner scrollbar-style">
          <div class="d-column">
            <label class="label-text">Basic Information</label>
            <div class="column3">
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Email address</label>
              </div>
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Middle Name</label>
              </div>
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Last Name</label>
              </div>
            </div>
            <div class="">
              <div class="input-group date" id="datepicker">
                <input type="text" class="form-control" name="dob" id="date" placeholder="Enter your DOB" />
                <span class="input-group-append">
                  <span class="input-group-text bg-light">
                    <i class="bi bi-calendar-fill"></i>
                  </span>
                </span>
              </div>
            </div>
            <div class="mt-3">
              <div class="d-flex justify-content-between">
                <label class="label-text">Jurisdiction</label>
                <div class="multiple-text d-flex align-items-center">
                  <input type="checkbox" type="checkbox" id="multipleCitizenship" class="radio-btns"> Multiple Citizenship
                </div>
              </div>
              <div class="mt-1">
                <select id="select_multi_country" class="selectpicker countrypicker form-control" data-flag="true" data-live-search="true" multiple></select>
              </div>
            </div>
            <div class="mt-3">
              <label class="label-text">Basic Information</label>
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Country of Residence</label>
              </div>
            </div>
            <div class="mt-3">
              <label class="label-text">Upload Identification Documents</label>
              <div class="form group mt-3">
                <label class="label-text">Country/Region of Issue</label>
                <select id="Region_of_Issue" class="selectpicker countrypicker form-control" data-live-search="true" data-flag="true" multiple></select>
              </div>
            </div>
            <div class="mt-3">
              <label class="label-text">Select Document Type</label>
              <div class="form-group d-flex doc-type mt-2">
                <div class="passport d-flex align-items-center">
                  <input type="radio" id="passport" class="radio-btns"> Passport
                </div>
                <div class="aadhar d-flex align-items-center">
                  <input type="radio" id="aadhar" class="radio-btns"> Aadhar Card
                </div>
                <div class="passport d-flex align-items-center">
                  <input type="radio" id="passport" class="radio-btns"> Id Card
                </div>
              </div>
            </div>
            <div class="form group mt-3">
              <label class="label-text">Identification Number</label>
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Identification Number</label>
              </div>
            </div>
            <div class="doc-instractions">
              <label class="label-text">Upload Document Photos</label>
              <ul class="instractions">
                <li>Upload in the natural colorful forms instead of a scan/edited copy</li>
                <li>Please make sure you taken all 4 corners of the document</li>
                <li>Please make sure your ID document is valid and not expired</li>
              </ul>
            </div>
            <div class="upl-doc">
              <div class="upl-doc-inner">
                <div class="inner-doc">
                  <div class="upld-main">
                    <div class="upld-text">Click or drag and drop to attach ID front</div>
                    <div class="icon-div">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="icon-upl">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 7.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM13.5 11a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" fill="#76808F"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 4h20v16H2V4zm2 2v7.586l3-3L14.414 18H20V6H4zm0 12v-1.586l3-3L11.586 18H4z" fill="#76808F"></path>
                      </svg>
                      <div class="attach">Attach Image</div>
                    </div>
                    <div class="img-types">Max 5 MB in .jpg/.jpeg/.png/.pdf format</div>
                  </div>
                </div>
                <input name="front" type="file" accept="image/jpg,image/jpeg,image/png,application/pdf" multiple="" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
              </div>
              <div class="upl-doc-inner">
                <div class="inner-doc">
                  <div class="upld-main">
                    <div class="upld-text">Click or drag and drop to attach ID back</div>
                    <div class="icon-div">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="icon-upl">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 7.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM13.5 11a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" fill="#76808F"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 4h20v16H2V4zm2 2v7.586l3-3L14.414 18H20V6H4zm0 12v-1.586l3-3L11.586 18H4z" fill="#76808F"></path>
                      </svg>
                      <div class="attach">Attach Image</div>
                    </div>
                    <div class="img-types">Max 5 MB in .jpg/.jpeg/.png/.pdf format</div>
                  </div>
                </div>
                <input name="back" type="file" accept="image/jpg,image/jpeg,image/png,application/pdf" multiple="" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
              </div>
            </div>

             <div class="Proof-of-address mt-3 mb-3">
              <label class="label-text">Proof of address</label>
              <ul class="instractions">
                <li>Ensure the PoA documents were issued in the last <span class="text-danger">90</span> days.</li>
                <li>Ensure <span class="text-danger"> full role's name</span> and <span class="text-danger"> full address</span> are reflected on the document.</li>
                <li>We only support a <span class="text-danger"> limited number of document types </span>. Unsupported documents will be rejected.</li>
                <li><b>Bank statements (with transactions history).</b> We accept digital bank statements too but please send us the original .pdf file. Please note that sensitive information, such as transaction details, can be covered.</li>
              <li><b> Utility bills</b>, such as electricity, water, fixed internet, or phone bills (please note that we do not accept mobile phone bills and insurance letters), waste management, etc.</li>
              <li><b>Government documents,</b> such as letters from government agencies, tax bills, etc.</li>
              </ul>
            </div>

               <div class="upld-btn-div">
     <div class="upld-btn-outer">
       <div class="upld-btn-inner">
         <button  type="button" class="generate-btn">
           <input type="file" name="billFile" accept=".pdf,.jpg,.jpeg,.png" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="upld-icon">
             <path fill-rule="evenodd" clip-rule="evenodd" d="M3.224 6V3h8.5v3h-5.5v12h5.5v3h-8.5V6zm5.368 7.5v-3h6.587V5.984L21.21 12l-6.03 5.98V13.5H8.592z" fill="currentColor"></path>
           </svg>Upload </button>
       </div>
     </div>
   </div>
    <div class="mt-3">
    <label class="label-text">Confirm Address Document</label>
    <label class="label-text"> Fill in details of the document that you have just uploaded</label>
    <label class="label-text"> Select Document Type</label>
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <select class="form-control">
          <option>Utility Bills</option>
          <option>Bank Statement</option>
          <option>Government</option>
          <option>Other</option>
        </select>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="input-group date" id="datepicker">
          <input type="text" class="form-control" name="dob" id="date" placeholder="Enter your DOB" />
          <span class="input-group-append">
            <span class="input-group-text bg-light">
              <i class="bi bi-calendar-fill"></i>
            </span>
          </span>
        </div>
      </div>
      <div class="col-md-12 mt-2 mb-2 text-center">
        <label class="label-text mb-0"> Address reflected in the above document </label>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="form-floating mb-3 clearable-input">
          <input type="text" class="form-control searchinput" placeholder="demo">
          <label>Country/Region of Issue</label>
        </div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="form-floating mb-3 clearable-input">
          <input type="text" class="form-control searchinput" placeholder="demo">
          <label> State/Province (if applicable)</label>
        </div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="form-floating mb-3 clearable-input">
          <input type="text" class="form-control searchinput" placeholder="demo">
          <label>City</label>
        </div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="form-floating mb-3 clearable-input">
          <input type="text" class="form-control searchinput" placeholder="demo">
          <label>Zip Code</label>
        </div>
      </div>
      <div class="col-md-12 col-sm-12">
        <div class="form-floating mb-3 clearable-input">
          <input type="text" class="form-control searchinput" placeholder="demo">
          <label>Street Address </label>
        </div>
      </div>
    </div>
  </div>
           </div>
        </div>

      </form>
    </div>
    <div class="modal-footer mt-5">
      <div class="footer-div-btn">
        <button class="modal_btn_theme">Submit</button>
        <button class="btn bg-whitesmoke">Cancel </button>
      </div>
    </div>
  </div>

</div>

<div class="modal custom_modal" id="Add_Authorised_Account">
  <div class="modal-sandbox"></div>
  <div class="modal-box" style="max-width:850px;">
    <div class="modal-header">
      <div class="modal-icons">
        <span class="btn-back" id="back_start">
          <i class="bi bi-arrow-left"></i>
        </span>
        <span class="close-modal">
          <i class="bi bi-x"></i>
        </span>
      </div>
      <div class="modal_heading">Add Authorised Account Trader</div>
    </div>
    <div class="modal-body text-start">

      <form action="#" style="width: 100%;">
        <div class="form-inner scrollbar-style">
          <div class="d-column">
            <label class="label-text">Basic Information</label>
            <div class="column3">
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Email address</label>
              </div>
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Middle Name</label>
              </div>
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Last Name</label>
              </div>
            </div>
            <div class="">
              <div class="input-group date" id="datepicker">
                <input type="text" class="form-control" name="dob" id="date" placeholder="Enter your DOB" />
                <span class="input-group-append">
                  <span class="input-group-text bg-light">
                    <i class="bi bi-calendar-fill"></i>
                  </span>
                </span>
              </div>
            </div>
            <div class="mt-3">
              <div class="d-flex justify-content-between">
                <label class="label-text">Jurisdiction</label>
                <div class="multiple-text d-flex align-items-center">
                  <input type="checkbox" type="checkbox" id="multipleCitizenship" class="radio-btns"> Multiple Citizenship
                </div>
              </div>
              <div class="mt-1">
                <select id="select_multi_country" class="selectpicker countrypicker form-control" data-flag="true" data-live-search="true" multiple></select>
              </div>
            </div>
            <div class="mt-3">
              <label class="label-text">Residential Address</label>
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Country of Residence</label>
              </div>
            </div>
            <div class="mt-3">
              <label class="label-text">State/Province (if applicable)</label>
              <div class="form group mt-3">
                <select id="Region_of_Issue" class="selectpicker countrypicker form-control" data-live-search="true" data-flag="true" multiple></select>
              </div>
            </div>
            <div class="mt-3">
              <label class="label-text">Select Document Type</label>
              <div class="form-group d-flex doc-type mt-2">
                <div class="passport d-flex align-items-center">
                  <input type="radio" id="passport" class="radio-btns"> Passport
                </div>
                <div class="aadhar d-flex align-items-center">
                  <input type="radio" id="aadhar" class="radio-btns"> Aadhar Card
                </div>
                <div class="passport d-flex align-items-center">
                  <input type="radio" id="passport" class="radio-btns"> Id Card
                </div>
              </div>
            </div>
            <div class="form group mt-3">
              <label class="label-text">Identification Number</label>
              <div class="form-floating mb-3 clearable-input">
                <input type="text" class="form-control searchinput" placeholder="demo">
                <label>Identification Number</label>
              </div>
            </div>
            <div class="doc-instractions">
              <label class="label-text">Upload Document Photos</label>
              <ul class="instractions">
                <li>Upload in the natural colorful forms instead of a scan/edited copy</li>
                <li>Please make sure you taken all 4 corners of the document</li>
                <li>Please make sure your ID document is valid and not expired</li>
              </ul>
            </div>
            <div class="upl-doc">
              <div class="upl-doc-inner">
                <div class="inner-doc">
                  <div class="upld-main">
                    <div class="upld-text">Click or drag and drop to attach ID front</div>
                    <div class="icon-div">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="icon-upl">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 7.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM13.5 11a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" fill="#76808F"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 4h20v16H2V4zm2 2v7.586l3-3L14.414 18H20V6H4zm0 12v-1.586l3-3L11.586 18H4z" fill="#76808F"></path>
                      </svg>
                      <div class="attach">Attach Image</div>
                    </div>
                    <div class="img-types">Max 5 MB in .jpg/.jpeg/.png/.pdf format</div>
                  </div>
                </div>
                <input name="front" type="file" accept="image/jpg,image/jpeg,image/png,application/pdf" multiple="" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
              </div>
              <div class="upl-doc-inner">
                <div class="inner-doc">
                  <div class="upld-main">
                    <div class="upld-text">Click or drag and drop to attach ID back</div>
                    <div class="icon-div">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="icon-upl">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 7.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM13.5 11a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" fill="#76808F"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 4h20v16H2V4zm2 2v7.586l3-3L14.414 18H20V6H4zm0 12v-1.586l3-3L11.586 18H4z" fill="#76808F"></path>
                      </svg>
                      <div class="attach">Attach Image</div>
                    </div>
                    <div class="img-types">Max 5 MB in .jpg/.jpeg/.png/.pdf format</div>
                  </div>
                </div>
                <input name="back" type="file" accept="image/jpg,image/jpeg,image/png,application/pdf" multiple="" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
              </div>
            </div>

             <div class="Proof-of-address mt-3 mb-3">
              <label class="label-text">Proof of address</label>
              <ul class="instractions">
                <li>Ensure the PoA documents were issued in the last <span class="text-danger">90</span> days.</li>
                <li>Ensure <span class="text-danger"> full role's name</span> and <span class="text-danger"> full address</span> are reflected on the document.</li>
                <li>We only support a <span class="text-danger"> limited number of document types </span>. Unsupported documents will be rejected.</li>
                <li><b>Bank statements (with transactions history).</b> We accept digital bank statements too but please send us the original .pdf file. Please note that sensitive information, such as transaction details, can be covered.</li>
              <li><b> Utility bills</b>, such as electricity, water, fixed internet, or phone bills (please note that we do not accept mobile phone bills and insurance letters), waste management, etc.</li>
              <li><b>Government documents,</b> such as letters from government agencies, tax bills, etc.</li>
              </ul>
            </div>


               <div class="upld-btn-div">
                 <div class="upld-btn-outer">
                   <div class="upld-btn-inner">
                     <button type="button" class="generate-btn">
                       <input type="file" name="billFile" accept=".pdf,.jpg,.jpeg,.png" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="upld-icon">
                         <path fill-rule="evenodd" clip-rule="evenodd" d="M3.224 6V3h8.5v3h-5.5v12h5.5v3h-8.5V6zm5.368 7.5v-3h6.587V5.984L21.21 12l-6.03 5.98V13.5H8.592z" fill="currentColor"></path>
                       </svg>Upload </button>
                   </div>
                 </div>
               </div>
               <div class="mt-3">
                 <label class="label-text">Confirm Address Document</label>
                 <label class="label-text"> Fill in details of the document that you have just uploaded</label>
                 <label class="label-text"> Select Document Type</label>
                 <div class="row">
                   <div class="col-md-6 col-sm-6">
                     <select class="form-control">
                       <option>Utility Bills</option>
                       <option>Bank Statement</option>
                       <option>Government</option>
                       <option>Other</option>
                     </select>
                   </div>
                   <div class="col-md-6 col-sm-6">
                     <div class="input-group date" id="datepicker">
                       <input type="text" class="form-control" name="dob" id="date" placeholder="Enter your DOB" />
                       <span class="input-group-append">
                         <span class="input-group-text bg-light">
                           <i class="bi bi-calendar-fill"></i>
                         </span>
                       </span>
                     </div>
                   </div>
                   <div class="col-md-12 mt-2 mb-2 text-center">
                     <label class="label-text mb-0"> Address reflected in the above document </label>
                   </div>
                   <div class="col-md-6 col-sm-6">
                     <div class="form-floating mb-3 clearable-input">
                       <input type="text" class="form-control searchinput" placeholder="demo">
                       <label>Country/Region of Issue</label>
                     </div>
                   </div>
                   <div class="col-md-6 col-sm-6">
                     <div class="form-floating mb-3 clearable-input">
                       <input type="text" class="form-control searchinput" placeholder="demo">
                       <label>State/Province (if applicable)</label>
                     </div>
                   </div>
                   <div class="col-md-6 col-sm-6">
                     <div class="form-floating mb-3 clearable-input">
                       <input type="text" class="form-control searchinput" placeholder="demo">
                       <label>City</label>
                     </div>
                   </div>
                   <div class="col-md-6 col-sm-6">
                     <div class="form-floating mb-3 clearable-input">
                       <input type="text" class="form-control searchinput" placeholder="demo">
                       <label>Zip Code</label>
                     </div>
                   </div>
                   <div class="col-md-12 col-sm-12">
                     <div class="form-floating mb-3 clearable-input">
                       <input type="text" class="form-control searchinput" placeholder="demo">
                       <label>Street Address </label>
                     </div>
                   </div>
                 </div>
               </div>
               </div>
               </div>
               </form>
               </div>
               <div class="modal-footer mt-5">
                 <div class="footer-div-btn">
                   <button class="modal_btn_theme">Submit</button>
                   <button class="btn bg-whitesmoke">Cancel </button>
                 </div>
               </div>
               </div>
               </div>
        @include('template.auth_page_js')

         <!----------------------------------- add for country dropdown box---------------------------------->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script>
         <!------------------------ add for datepicker---------------------------->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

      <script src="{{ asset('assets/js/bootstrap-select-country.min.js') }}"></script>

    <script>
        $(".modal-trigger").click(function(e){
         e.preventDefault();
         dataModal = $(this).attr("data-modal");
         $("#" + dataModal).css({"display":"block"});

         });

         $(".close-modal, .modal-sandbox").click(function(){
         $(".modal").css({"display":"none"});
         });

         $('.modal').on('shown.bs.modal', function (e) {
        $('.modal.show').each(function (index) {
            $(this).css('z-index', 1101 + index*2);
        });
        $('.modal-backdrop').each(function (index) {
            $(this).css('z-index', 1101 + index*2-1);
        });
    });
    </script>

    <script>
      $(document).ready(function () {
          $("#verify_btn").click(function(){
             $("#second_div").css("display", "block");
             $("#first").css("display", "none");
            });

             $("#btn-2").click(function(){
             $("#second_div").css("display", "none");
             $("#third").css("display", "block");
            });

            $("#select_farm").click(function(){
             $("#fourth").css("display", "block");
             $("#third").css("display", "none");
            });

                    $('.selectpicker').change(function () {
        var selectedItem = $('.selectpicker1').val();
         var selectedItem2 = $('.selectpicker2').val();
        // alert(selectedItem);
        //  alert(selectedItem2);
        if(selectedItem !="" && selectedItem2 !=""){

          $("#select_farm").removeClass("inactive");
        }
    });
       });

       function select_country(){
                var doc=$("#doccc").val();
                var val = $('.niceCountryInputMenuDefaultText span').text();
                 if(doc!="" && val!=""){
                $("#btn-2").removeClass("inactive");
            }
        }
       </script>


        <script>
          $(document).ready(function () {
            $(".niceCountryInputSelector").each(function(i,e){
                new NiceCountryInput(e).init();
            });
        });

             // initialyze selectpicker
        $('select').selectpicker();

         $(".modal-trigger").click(function(e){
        e.preventDefault();
        dataModal = $(this).attr("data-modal");
         $("#" + dataModal).css({"display":"block"});

    });
     $(".close-modal, .modal-sandbox").click(function(){
      $(".modal").css({"display":"none"});
    });

    $(".selectYes").click(function(){
      $("#idYes").css({"display":"block"});
      $("#ifNo").css({"display":"none"});
      $(".add1").addClass('spprt-svgicon-active');
      $(".add2").removeClass('spprt-svgicon-active');

    });
     $(".selectNo").click(function(){
      $("#ifNo").css({"display":"block"});
      $("#idYes").css({"display":"none"});
       $(".add1").removeClass('spprt-svgicon-active');
      $(".add2").addClass('spprt-svgicon-active');

    });

                    $(".addressYes").click(function(){
      $(".address_same").css({"display":"block"});
      $(".address_nosame").css({"display":"none"});
      $(".a1").addClass('spprt-svgicon-active');
      $(".a2").removeClass('spprt-svgicon-active');

    });
     $(".addressNo").click(function(){
      $(".address_nosame").css({"display":"block"});
      $(".address_same").css({"display":"none"});
       $(".a1").removeClass('spprt-svgicon-active');
      $(".a2").addClass('spprt-svgicon-active');

    });


 $("#btn_basic_detail").click(function(){
 $(".modal").css({"display":"none"});
 $("#fourth").css({"display":"none"});
 $("#fifth").css({"display":"block"});

});

 $("#basic_information").click(function(){
 $("#basic_information-div").css({"display":"block"});
 $("#fifth").css({"display":"none"});

});

 $("#Related-Parties").click(function(){
 $("#Related-Parties-div").css({"display":"block"});
 $("#fifth").css({"display":"none"});

});

      $("#Individual").click(function(){
 $(".Individual").css({"display":"block"});
 $(".Entity").css({"display":"none"});
 $(".Entity").css({"display":"none"});

});

 $("#Entity").click(function(){
 $(".Individual").css({"display":"none"});
 $(".Entity").css({"display":"block"});
});


 $(".close-Entity-Add-Director").click(function(){
 $("#Entity-Add-Director").css({"display":"none"});
});


 $("#cancel-delete").click(function(){
 $("#delete_box_modal").css({"display":"none"});
});

// $("#multipleCitizenship").click(function(){
//  $('#select_multi_country').prop('multiple',true);

// });


$('.accordion__header').click(function(e) {
	e.preventDefault();
	var currentIsActive = $(this).hasClass('is-active');
	$(this).parent('.accordion').find('> *').removeClass('is-active');
	if(currentIsActive != 1) {
		$(this).addClass('is-active');
		$(this).next('.accordion__body').addClass('is-active');
	}
});
     </script>



 <script>
      $(function(){
         $('#datepicker').datepicker();
         });
 </script>



   </body>
</html>
