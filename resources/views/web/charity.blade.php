<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title> @include('template.web_css') <style>

      .charity-top-main-section {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        background-color: rgb(250, 250, 250);
      }

      . {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
      }



      .charity-top-div {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        width: 100%;
        padding-left: 16px;
        padding-right: 16px;
      }





      .charity-top-setion {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        display: flex;
        flex-direction: column;
        -webkit-box-align: center;
        align-items: center;
      }

    .charity-top-setion .left {
        box-sizing: border-box;
        margin: 0px auto;
        min-width: 0px;
        width: 240px;
        height: 240px;
        flex-shrink: 0;
      }

     .charity-top-setion .right {
        box-sizing: border-box;
        margin: 16px 0px 0px;
        min-width: 0px;
      }

     .charity-top-setion .right > div:first-child {
        box-sizing: border-box;
        margin: 0px 0px 16px;
        min-width: 0px;
        font-weight: 600;
        font-size: 32px;
        line-height: 40px;
        color: rgb(30, 35, 41);
      }

    .charity-top-setion .right > div:last-child {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        font-weight: 400;
        font-size: 14px;
        line-height: 20px;
        color: var(--text-gray);
      }

      .charity-type {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        grid-template-columns: 1fr;
        gap: 16px;
        display: grid;
      }

      .charity-type .block {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        display: flex;
        transition: all 0.3s ease 0s;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 32px 80px -40px;
        border-radius: 24px;
        background-color: rgba(255, 255, 255, 0.8);
        cursor: pointer;
        padding: 12px 16px;
        -webkit-box-align: center;
        align-items: center;
      }

      .charity-type .block .icon {
        box-sizing: border-box;
        margin: 0px 12px 0px 0px;
        min-width: 0px;
        width: 56px;
        height: 56px;
        display: block;
        flex-shrink: 0;
      }



   .charity-type .block .content {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        flex: 1 1 0%;
      }

.charity-type .block .content > div:first-child {
        box-sizing: border-box;
        margin: 0px 0px 2px;
        min-width: 0px;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
      }



    .charity-type .block .content  .head-div {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        display: flex;
        flex: 1 1 0%;
        flex-direction: row;
        -webkit-box-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        align-items: center;
      }

   .charity-type .block .content   .title {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        color: rgb(30, 35, 41);
      }

    .charity-type .block .content .learn-more {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        display: flex;
        color: var(--text-yellow);
      }
      .charity-type .block .content .learn-more:hover:before,.charity-type .block .content .learn-more:hover:after{
          display:none;
      }

     .learn-more > div {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        font-weight: 500;
        font-size: 12px;
        line-height: 16px;
      }

     .learn-more > svg {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        color: currentcolor;
        fill: currentcolor;
        width: 1em;
        height: 1em;
        font-size: 16px;
      }

    .charity-type .block .content > div:last-child {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        font-weight: 400;
        font-size: 12px;
        line-height: 16px;
        color: var(--text-gray);
      }



      .charity-top-secon-div-row {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        display: flex;
        width: 100%;
        flex-direction: column;
        -webkit-box-align: center;
        align-items: center;
        position: relative;
        z-index: 20;
      }

      .white-circle-div {
        box-sizing: border-box;
        margin: 0px 0px 32px;
        min-width: 0px;
        display: flex;
        width: 264px;
        height: 264px;
        padding: 34px 0px;
        text-align: center;
        flex-direction: column;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        justify-content: space-between;
        flex-shrink: 0;
        border-radius: 600px;
        background-color: rgba(250, 250, 250, 0.8);
      }

      .statistics-value {
        box-sizing: border-box;
        margin: 0px 0px 4px;
        min-width: 0px;
        font-weight: 600;
        font-size: 24px;
        line-height: 32px;
        text-align: center;
        color: var(--text-yellow);
      }

      .charity-top-secon-div {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        padding: 32px 16px;
        /* background-color: rgb(250, 250, 250); */
      }

      .statistics-title {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        font-weight: 400;
        font-size: 12px;
        line-height: 16px;
        color: rgb(112, 122, 138);
      }



   .ourApproach .main-heading-div {
        box-sizing: border-box;
        margin: 0px auto;
        min-width: 0px;
        display: flex;
        width: 100%;
        /*max-width: 1200px;*/
        padding-bottom: 16px;
        flex-direction: row;
        -webkit-box-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        align-items: center;
        border-bottom: 1px solid rgb(234, 236, 239);
      }

   .ourApproach .main-heading-div .main-title {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        font-weight: 600;
        font-size: 20px;
        line-height: 28px;
        color: rgb(30, 35, 41);
      }


      .block-grid {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        grid-template-columns: 1fr;
        gap: 24px;
        display: grid;
      }

      .ourApproach .title {
        box-sizing: border-box;
        margin: 0px 0px 8px;
        min-width: 0px;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        color: rgb(30, 35, 41);
      }



      .charity-top-overlay {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        position: absolute;
        top: 36px;
        left: -108px;
        z-index: 10;
        opacity: 0.2;
        filter: blur(40.7783px);
        width: 241px;
        height: 241px;
        background-color: rgb(238, 160, 98);
      }

      @media screen and (min-width: 767px) {


        .charity-top-div {
          padding-left: 48px;
          padding-right: 48px;
        }

        .charity-top-setion {
          flex-direction: row;
        }

      .charity-top-setion .left {
          margin-left: 0px;
          margin-right: 0px;
          width: 200px;
          height: 200px;
        }

      .charity-top-setion .right {
          margin-left: 40px;
          margin-top: 0px;
        }

       .charity-top-setion .right > div:first-child {
          margin-bottom: 20px;
          font-size: 40px;
          line-height: 48px;
        }

      .charity-top-setion .right > div:last-child {
          font-size: 16px;
          line-height: 24px;
        }

        .charity-type {
          grid-template-columns: 1fr 1fr;
          gap: 32px;
        }

        .charity-type .block {
          padding: 20px 24px;
        }

      .charity-type .block .icon {
          width: auto;
          height: auto;
          margin-right: 0px;
          display: none;
        }

    .charity-type .block .content > div:first-child {
          margin-bottom: 8px;
        }



     .charity-type .block .content   .head-div {
          flex-direction: column;
          -webkit-box-pack: start;
          justify-content: flex-start;
          align-items: flex-start;
        }

     .charity-type .block .content   .title {
          margin-bottom: 4px;
          font-weight: 600;
          font-size: 20px;
          line-height: 28px;
        }

      .learn-more > div{
          font-size: 14px;
          line-height: 20px;
        }

       .learn-more > svg {
          font-size: 20px;
        }

      .charity-type .block .content > div:last-child {
          font-size: 14px;
          line-height: 20px;
        }

        .charity-top-secon-div {
          padding: 40px 48px;
        }

        .charity-top-secon-div-row {
          flex-direction: column;
        }

        .white-circle-div {
          width: 100%;
          height: auto;
          margin-bottom: 40px;
          margin-right: 0px;
          padding: 40px 48px;
          flex-direction: row;
          background-color: rgba(250, 250, 250, 0.8);
        }

        .statistics-value {
          margin-bottom: 8px;
          font-size: 32px;
          line-height: 40px;
        }

        .statistics-title {
          font-size: 14px;
          line-height: 20px;
        }



       .ourApproach .main-heading-div {
          padding-bottom: 20px;
        }

       .ourApproach .main-heading-div .main-title{
          font-size: 28px;
          line-height: 36px;
        }



        .block-grid {
          grid-template-columns: 1fr 1fr;
          gap: 32px;
        }

      .ourApproach .title {
          margin-bottom: 12px;
          font-weight: 600;
          font-size: 20px;
          line-height: 28px;
        }



        .charity-top-overlay {
          top: -36px;
          left: -109px;
          filter: blur(47.8849px);
          width: 283px;
          height: 283px;
        }
      }

      @media screen and (min-width: 1023px) {
        .charity-top-setion {
          flex-direction: row;
        }

        .charity-top-div {
          padding-left: 24px;
          padding-right: 24px;
        }


        .charity-top-setion .left {
          margin-left: 0px;
          margin-right: 0px;
          width: 360px;
          height: 360px;
        }

        .charity-top-setion .right {
          margin-left: 80px;
          margin-top: 0px;
        }

      .charity-top-setion .right > div:first-child{
          margin-bottom: 32px;
          font-size: 56px;
          line-height: 64px;
        }

       .charity-top-setion .right > div:last-child{
          font-size: 20px;
          line-height: 28px;
        }

        .charity-type {
          gap: 48px;
        }

        .charity-type .block {
          padding: 28px 40px;
        }

      .charity-type .block .icon {
          width: 96px;
          height: 96px;
          margin-right: 20px;
          display: block;
        }

      .charity-type .block .content > div:first-child{
          margin-bottom: 12px;
        }



     .charity-type .block .content   .head-div {
          flex-direction: row;
          -webkit-box-pack: justify;
          justify-content: space-between;
          -webkit-box-align: center;
          align-items: center;
        }

     .charity-type .block .content   .title {
          margin-bottom: 0px;
          font-weight: 600;
          font-size: 24px;
          line-height: 32px;
        }

       .learn-more > div{
          font-size: 16px;
          line-height: 24px;
        }

       .learn-more > svg {
          font-size: 24px;
        }

        .charity-type .block .content > div:last-child {
          font-size: 16px;
          line-height: 24px;
        }

        .charity-top-secon-div {
          padding: 80px 24px;
        }

        .charity-top-secon-div-row {
          flex-direction: row;
        }

        .white-circle-div {
          width: 432px;
          height: 432px;
          margin-bottom: 0px;
          margin-right: 48px;
          padding: 68px 0px;
          flex-direction: column;
          background-color: rgb(255 255 255);
        }

        .statistics-value {
          margin-bottom: 8px;
          font-size: 40px;
          line-height: 48px;
        }

        .statistics-title {
          font-size: 16px;
          line-height: 24px;
        }



       .ourApproach .main-heading-div{
          padding-bottom: 24px;
        }

      .ourApproach .main-heading-div .main-title {
          font-size: 32px;
          line-height: 40px;
        }


        .block-grid {
          grid-template-columns: 1fr 1fr;
          gap: 32px 80px;
        }

     .ourApproach .title {
          box-sizing: border-box;
          margin: 0px 0px 8px;
          min-width: 0px;
          font-weight: 500;
          font-size: 16px;
          line-height: 24px;
          color: rgb(30, 35, 41);
        }



        .charity-top-overlay {
          top: -70px;
          left: -305px;
          filter: blur(100px);
          width: 591px;
          height: 591px;
        }
      }

      /*---------------------------------------------------------------------*/
      .commitments-div {
        box-sizing: border-box;
        min-width: 0px;
        display: flex;
        width: 100%;
        /*max-width: 1200px;*/
        flex-direction: column;
        -webkit-box-align: center;
        align-items: center;
      }

      .commitments-div-img {
        box-sizing: border-box;
        margin: 0px 0px 16px;
        min-width: 0px;
        width: 100%;
        height: auto;
        flex-shrink: 0;
      }


    .commitments-div .block {
        box-sizing: border-box;
        margin: 0px 0px 16px;
        min-width: 0px;
      }

      .commitments-div .block .title {
        box-sizing: border-box;
        margin: 0px 0px 4px;
        min-width: 0px;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        color: rgb(30, 35, 41);
      }




      .Direct-Crypto-Benefits {
        width: 100%;
       /*max-width: 1200px;*/
        margin: 0px auto 58px;
        display: flex;
        flex-direction: row;
        -webkit-box-pack: justify;
        justify-content: space-between;
        align-items: center;
      }

      .Direct-Crypto-Benefits-left {
        width: 44.25%;
        margin: 0px;
        flex-shrink: 0;
      }

      .Direct-Crypto-Benefits-right {
        width: 47.33%;
        flex-shrink: 0;
      }

      .Direct-Crypto-Benefits-right .title{
        box-sizing: border-box;
        margin: 0px 0px 8px;
        min-width: 0px;
        font-weight: 600;
        font-size: 20px;
        line-height: 28px;
        color: rgb(30, 35, 41);
      }


      .Direct-Crypto-block {
        box-sizing: border-box;
    position: relative;
    z-index: 20;
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 24px;
      }

   .Direct-Crypto-block .block {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        display: flex;
        padding: 20px;
        flex-direction: column;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        border-radius: 16px;
        background-color: rgba(255, 255, 255, 0.8);
        box-shadow: rgba(0, 0, 0, 0.16) 0px 32px 80px -40px;
      }

     .Direct-Crypto-block .block > div {
        box-sizing: border-box;
        margin: 0px 0px 16px;
        min-width: 0px;
        display: flex;
        flex: 1 1 0%;
        flex-direction: column;
        -webkit-box-align: center;
        align-items: center;
      }
 .Direct-Crypto-block .block .title {
        box-sizing: border-box;
        margin-bottom:10px;
        min-width: 0px;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        color: rgb(30, 35, 41);
      }



    .Direct-Crypto-block .block  button {
        font-size: 16px;
        padding: 8px 24px;
        min-width: 100%;
        color: rgb(30, 35, 41);
        border-radius: 4px;
        border: none;
        background-color: rgb(234, 236, 239);

      }



     .donation-section > div {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        width: 100%;
        padding: 32px 16px;
        background-color: rgb(250, 250, 250);
        position: relative;
        z-index: 20;
      }

     .donation-section .heading-div {
        box-sizing: border-box;
        margin: 0px auto 24px;
        min-width: 0px;
        display: flex;
        width: 100%;
       max-width: 1200px;
        flex-direction: row;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        justify-content: space-between;
      }

   .donation-section   .main-title {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        font-weight: 600;
        font-size: 20px;
        line-height: 28px;
        color: rgb(30, 35, 41);
      }



      .donation-section-btn-div {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        white-space: nowrap;
        display: flex;
        flex-direction: row;
        /*overflow: scroll;*/
        background-color: rgb(245, 245, 245);
        border-radius: 4px;
        height: 24px;
        width: fit-content;
      }

     .donation-section-btn-div .btns {
        box-sizing: border-box;
        margin: 0px;
        font-size: 12px;
        line-height: 16px;
        padding: 4px;
        user-select: none;
        color: rgb(30, 35, 41);
        border-radius: 4px;
        min-width: 82px;
        text-align: center;
      }


       .donation-section-btn-div .btns {
        box-sizing: border-box;
        margin: 0px;
        font-size: 12px;
        line-height: 16px;
        padding: 4px;
        user-select: none;
        color: rgb(30, 35, 41);
        border-radius: 4px;
        min-width: 82px;
        text-align: center;
      }

      .donation-section-btn-div .btns.active {
        background-color: rgb(252, 213, 53);
        color: rgb(24, 26, 32);
        font-weight: 500;
      }



      .donationFlow-main-div {
        box-sizing: border-box;
        margin: 0px auto;
        min-width: 0px;
        width: 100%;
       max-width: 1200px;
        display: grid;
        grid-template-columns: 1fr;
        gap: 0px;
      }

      /*.donationFlow-main-div {*/
      /*  box-sizing: border-box;*/
      /*  margin: 0px auto;*/
      /*  min-width: 0px;*/
      /*  width: 100%;*/
       /*max-width: 1200px;*/
      /*  display: grid;*/
      /*  grid-template-columns: 1fr;*/
      /*  gap: 0px;*/
      /*}*/

      .donationFlow-div {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        display: flex;
        width: 100%;
        flex-direction: column;
        -webkit-box-align: stretch;
        align-items: stretch;
      }

      .donationFlow-div .block {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        display: flex;
        flex: 1 1 0%;
        padding: 12px 16px;
        flex-direction: row;
        -webkit-box-align: center;
        align-items: center;
        border-radius: 16px;
        background-color: rgb(255, 255, 255);
      }

      .donationFlow-div .block .icon {
        box-sizing: border-box;
        margin: 0px 12px 0px 0px;
        min-width: 0px;
        width: 48px;
        height: 48px;
      }

      .donationFlow-div .block .content {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        flex: 1 1 0%;
        font-weight: 500;
        font-size: 12px;
        line-height: 16px;
        color: var(--text-gray);
      }

      .df-arrow {
        box-sizing: border-box;
        min-width: 0px;
        display: flex;
        width: 24px;
        height: 24px;
        margin: 4px auto;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
      }

      .df-arrow .arrow-icon {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        fill: currentcolor;
        font-size: 16px;
        transform: rotate(90deg);
        color: rgb(196, 196, 196);
        width: 1em;
        height: 1em;
      }


      @media screen and (min-width: 767px) {
       .Direct-Crypto-block .block .title {
          font-size: 16px;
          line-height: 24px;
        }

        .donationFlow-div .block .icon {
          width: 48px;
          height: 48px;
        }

        .commitments-div {
          flex-direction: row-reverse;
        }

        .commitments-div-img {
          width: 320px;
          margin-bottom: 0px;
          margin-left: 32px;
        }

       .commitments-div .block {
          margin-bottom: 20px;
        }

       .commitments-div .block .title{
          font-weight: 600;
          font-size: 20px;
          line-height: 28px;
        }


      .Direct-Crypto-Benefits-right .title {
          margin-bottom: 16px;
          font-size: 24px;
          line-height: 32px;
        }



        .Direct-Crypto-block {
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

      .Direct-Crypto-block .block{
          padding: 20px;
        }

      .Direct-Crypto-block .block > div {
          margin-bottom: 16px;
        }



         .donation-section > div {
          padding: 40px 48px;
        }

     .donation-section   .heading-div {
          margin-bottom: 32px;
        }

    .donation-section    .main-title {
          font-size: 28px;
          line-height: 36px;
        }

        .donationFlow-main-div {
          grid-template-columns: 1fr 1fr;
          gap: 16px;
        }

        .donationFlow-div {
          flex-direction: row;
          -webkit-box-align: center;
          align-items: center;
        }

        .donationFlow-div .block {
          padding: 12px 16px;
        }

        .donationFlow-div .block .content {
          font-size: 12px;
          line-height: 16px;
        }

        .df-arrow {
          width: 40px;
          height: 40px;
          margin: 0px;
          -webkit-box-align: center;
          align-items: center;
          -webkit-box-pack: end;
          justify-content: flex-end;
        }

        .df-arrow .arrow-icon {
          font-size: 24px;
          transform: rotate(0deg);
        }
      }

      @media screen and (min-width: 1023px) {
        .commitments-div {
          flex-direction: row-reverse;
        }

        .commitments-div-img {
          width: 568px;
          margin-bottom: 0px;
          margin-left: 64px;
        }

       .commitments-div .block {
          margin-bottom: 32px;
        }



         .donation-section > div{
          padding: 80px 24px;
        }

      .commitments-div .block .title {
          font-weight: 600;
          font-size: 24px;
          line-height: 32px;
        }



       .Direct-Crypto-Benefits-right .title {
          margin-bottom: 24px;
          font-size: 32px;
          line-height: 40px;
        }



        .Direct-Crypto-block {

              grid-template-columns: repeat(3, 1fr);
            gap: 48px;
        }

        .Direct-Crypto-block .block  {
          padding: 32px;
        }

       .Direct-Crypto-block .block > div{
          margin-bottom: 24px;
        }



      .Direct-Crypto-block .block  .title {
          font-size: 24px;
          line-height: 32px;
        }



     .donation-section   .heading-div {
          margin-bottom: 40px;
        }

      .donation-section  .main-title {
          line-height: 40px;
        }

        .donationFlow-main-div {
          grid-template-columns: 1fr 1fr 1fr;
          gap: 24px 9.6px;
        }

        .donationFlow-div {
          flex-direction: row;
          -webkit-box-align: center;
          align-items: center;
        }

        .donationFlow-div .block {
          padding: 20px 24px;
        }

        .donationFlow-div .block .icon {
          width: 64px;
          height: 64px;
        }

        .donationFlow-div .block .content {
          font-size: 14px;
          line-height: 20px;
        }

        .df-arrow {
          width: 34.6px;
          height: 34.6px;
          margin: 0px;
          -webkit-box-align: center;
          align-items: center;
          -webkit-box-pack: end;
          justify-content: flex-end;
        }

        .df-arrow .arrow-icon {
          font-size: 24px;
          transform: rotate(0deg);
        }
      }


    @media (max-width: 767px){
        .Direct-Crypto-Benefits-right {
            width: 100%;
        }
        .Direct-Crypto-Benefits {
    flex-direction: column;
    margin: 0px auto 24px;
}
            .Direct-Crypto-Benefits-left {
    width: 100%;
    max-width: 360px;
    margin: 0px 0px 22px;
}
     }


     .commitments-btn{
         padding: 8px 16px;
    text-align: center;
    border-radius: 200px;
    overflow: hidden;
    cursor: pointer;

     }
    .commitments-btn.active {
         background:linear-gradient(180deg, rgba(254, 192, 15, 1) 0%, rgba(248, 165, 50, 1) 100%);;
     }
    </style>
  </head>
  <body> @include('template.web_menu')


    <div class="charity-top-main-section">
        <div class="container">
            <div class="charity-top-div">
                <div class="charity-top-setion">
                        <div class="left">
                          <svg width="100%" height="100%" viewBox="0 0 1081 1080" fill="none" style="width: 100%; height: 100%;">
                            <path d="M676.961 674.325V769.685V800.954L756.413 846.02H756.414L756.413 973.417H224.688L456.335 741.957C463.937 734.361 473.402 728.898 483.782 726.116L676.961 674.325Z" fill="#E6E8EA"></path>
                            <path d="M799.498 641.476L816.241 703.273C818.884 713.028 813.491 723.158 803.923 726.412L569.336 806.189L545.753 709.467L799.498 641.476Z" fill="#E6E7EA"></path>
                            <path opacity="0.5" d="M1079.12 49.0908L572.145 49.0908V973.498H806.532H862.455L1079.12 916.047V49.0908Z" fill="url(#paint0_linear_4230_75523)"></path>
                            <path d="M1078.86 915.497L1067.15 871.808C1064.77 862.928 1055.72 857.593 1046.8 859.818L720.999 941.085L729.683 973.497L862.401 973.497L1078.86 915.497Z" fill="#EFF0F1"></path>
                            <path d="M996.609 811.861L959.277 774.529C952.859 768.111 942.513 767.928 935.872 774.115L721.909 973.453L835.018 973.453L996.609 811.861Z" fill="#F5F5F5"></path>
                            <path d="M864.977 800.28L812.255 769.842C803.489 764.78 792.297 767.416 786.71 775.857L686.06 927.939L764.969 973.498L864.977 800.28Z" fill="white"></path>
                            <path d="M463.656 831.063L0.994263 738.805V973.497H463.656V831.063Z" fill="url(#paint1_linear_4230_75523)"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M764.969 973.497L318.198 973.518L488.517 803.401C500.799 791.133 519.348 787.655 535.241 794.638L720.421 876.014L764.969 973.497Z" fill="white"></path>
                            <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M826.675 543.155C916.302 543.155 988.959 470.498 988.959 380.871C988.959 291.244 916.302 218.587 826.675 218.587C737.048 218.587 664.391 291.244 664.391 380.871C664.391 470.498 737.048 543.155 826.675 543.155ZM826.675 561.187C926.26 561.187 1006.99 480.457 1006.99 380.871C1006.99 281.286 926.26 200.556 826.675 200.556C727.089 200.556 646.359 281.286 646.359 380.871C646.359 480.457 727.089 561.187 826.675 561.187Z" fill="url(#paint2_linear_4230_75523)"></path>
                            <g data-svg-origin="36.35940170288086 36.46580123901367" transform="matrix(1,0,0,1,609,98.3417)" style="transform: matrix(1, 0, 0, 1, 609, 98.3417); translate: none; rotate: none; scale: none;">
                              <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M216.675 379.065C306.302 379.065 378.959 306.408 378.959 216.781C378.959 127.154 306.302 54.4974 216.675 54.4974C127.048 54.4974 54.3909 127.154 54.3909 216.781C54.3909 306.408 127.048 379.065 216.675 379.065ZM216.675 397.097C316.26 397.097 396.991 316.367 396.991 216.781C396.991 117.196 316.26 36.4658 216.675 36.4658C117.089 36.4658 36.3594 117.196 36.3594 216.781C36.3594 316.367 117.089 397.097 216.675 397.097Z" fill="url(#paint0_linear_4230_75539)"></path>
                              <circle r="144.252" transform="matrix(1 0 0 -1 216.674 216.781)" fill="url(#paint1_linear_4230_75539)"></circle>
                              <!--<path d="M117.5 216.782L139.894 239.176L162.288 216.782L139.894 194.387L117.5 216.782Z" fill="white"></path>-->
                              <!--<path d="M155.89 255.171L216.674 315.955L277.457 255.171L255.063 232.777L216.674 271.167L178.284 232.777L155.89 255.171Z" fill="white"></path>-->
                              <!--<path d="M194.28 216.782L216.674 239.176L239.068 216.782L216.674 194.387L194.28 216.782Z" fill="white"></path>-->
                              <!--<path d="M178.284 200.786L155.89 178.392L216.674 117.608L277.457 178.392L255.063 200.786L216.674 162.396L178.284 200.786Z" fill="white"></path>-->
                              <!--<path d="M271.059 216.782L293.453 239.176L315.847 216.782L293.453 194.387L271.059 216.782Z" fill="white"></path>-->
                              <defs>
                                <linearGradient id="paint0_linear_4230_75539" x1="216.675" y1="36.4658" x2="216.675" y2="397.097" gradientUnits="userSpaceOnUse">
                                  <stop stop-color="#D9D9D9"></stop>
                                  <stop offset="1" stop-color="#B9BABB" stop-opacity="0.25"></stop>
                                </linearGradient>
                                <linearGradient id="paint1_linear_4230_75539" x1="144.252" y1="0" x2="144.252" y2="288.505" gradientUnits="userSpaceOnUse">
                                  <stop offset="0.333333" stop-color="#F0B90B"></stop>
                                  <stop offset="1" stop-color="#FBDA3C"></stop>
                                </linearGradient>
                              </defs>
                            </g>
                            <g data-svg-origin="499.7179870605469 232.34800720214844" transform="matrix(1,0,0,1,0,-19.3219)" style="translate: none; rotate: none; scale: none; opacity: 0.9898;">
                              <path d="M989.273 593.749L971.244 575.719L953.214 593.749L971.244 611.778L989.273 593.749Z" fill="white"></path>
                              <path d="M938.711 593.955L927.935 583.179L917.158 593.955L927.935 604.732L938.711 593.955Z" fill="white"></path>
                              <path d="M971.247 561.419L982.023 550.643L971.247 539.866L960.471 550.643L971.247 561.419Z" fill="white"></path>
                              <path d="M1025.34 593.955L1014.56 583.179L1003.78 593.955L1014.56 604.732L1025.34 593.955Z" fill="white"></path>
                              <path d="M971.247 648.045L982.023 637.269L971.247 626.492L960.471 637.269L971.247 648.045Z" fill="white"></path>
                              <path d="M656.18 577.148L672.07 561.257L656.18 545.367L640.289 561.257L656.18 577.148Z" fill="#F84960"></path>
                              <path d="M611.263 509.919L620.125 501.056L611.263 492.194L602.401 501.056L611.263 509.919Z" fill="white"></path>
                              <path d="M506.441 552.09L513.164 545.367L506.441 538.645L499.718 545.367L506.441 552.09Z" fill="#F0B90B"></path>
                              <path d="M1048.56 379.737L1055.28 373.014L1048.56 366.292L1041.84 373.014L1048.56 379.737Z" fill="#F0B90B"></path>
                              <path d="M988.355 271.559L997.828 262.086L988.355 252.612L978.882 262.086L988.355 271.559Z" fill="white"></path>
                              <path d="M588.227 265.753L572.049 249.576L555.872 265.753L572.049 281.93L588.227 265.753Z" fill="#328DFD"></path>
                              <path d="M552.508 246.635V232.349H538.222V246.635H552.508Z" fill="#328DFD"></path>
                              <path d="M552.508 299.158V284.872H538.222V299.158H552.508Z" fill="#328DFD"></path>
                              <path d="M605.453 246.634V232.348H591.167V246.634H605.453Z" fill="#328DFD"></path>
                              <path d="M605.453 299.158V284.872H591.167V299.158H605.453Z" fill="#328DFD"></path>
                            </g>
                            <defs>
                              <linearGradient id="paint0_linear_4230_75523" x1="826.771" y1="663.911" x2="826.771" y2="99.3942" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FCEA9C"></stop>
                                <stop offset="1" stop-color="#FCEA9C" stop-opacity="0"></stop>
                              </linearGradient>
                              <linearGradient id="paint1_linear_4230_75523" x1="436.153" y1="823.453" x2="389.398" y2="913.296" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#E6E8EA"></stop>
                                <stop offset="1" stop-color="white"></stop>
                              </linearGradient>
                              <linearGradient id="paint3_linear_4230_75523" x1="144.252" y1="0" x2="144.252" y2="288.505" gradientUnits="userSpaceOnUse">
                                <stop offset="0.333333" stop-color="#F0B90B"></stop>
                                <stop offset="1" stop-color="#FBDA3C"></stop>
                              </linearGradient>
                            </defs>
                          </svg>
                        </div>
                        <div class="right">
                          <div class="">Web3 Solutions for Social Change</div>
                          <div class="">We are Wealthmark Charity, a non-profit organization dedicated to building a future where Web3 technology is used as a force for good.</div>
                        </div>
                      </div>
                <div class="charity-type">
                  <a href="javascript:void(0)">
                    <div class="block">
                      <div class="icon">

                        <img src="{{ asset('assets/img/charity/commitments.png') }}" class="w-100" alt="Affiliate img">
                      </div>
                      <div class="content">
                        <div class="">

                          <div class="head-div">
                            <div class="title">Our Commitments</div>
                            <div class="learn-more">
                              <div class="">Learn More</div>
                              <svg viewBox="0 0 24 24" fill="none" class="">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                        </div>
                        <div class="">We enable Web3 as a driver of social transformation by making its education and research accessible to all, and advancing global solutions for local humanitarian impact.</div>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="block">
                      <div class="icon">
                        <img src="{{ asset('assets/img/charity/impact.png') }}" class="w-100">
                      </div>
                      <div class="content">
                        <div class="">

                          <div class="head-div">
                            <div class="title">Our Impact</div>
                            <div class="learn-more">
                              <div class="">Learn More</div>
                              <svg viewBox="0 0 24 24" fill="none" class="">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                        </div>
                        <div class="">To date, we have helped over 2 million people in more than 54 countries by committing more than $23 million to fund 32 projects. Because we believe Web 3 should be built by and benefit all.</div>
                      </div>
                    </div>
                  </a>
                </div>

            </div>
            <div class="charity-top-secon-div">
              <div class="position-relative">
                <div class="charity-top-secon-div-row">
                  <div class="white-circle-div">
                    <div class="">
                      <div class="statistics-value">2,084,223</div>
                      <div class="statistics-title">Total Beneficiaries</div>
                    </div>
                    <div class="">
                      <div class="statistics-value">7,533</div>
                      <div class="statistics-title">Amount Donations</div>
                    </div>
                    <div class="">

                        <div class="statistics-value">2,114</div>
                        <div class="">BTC</div>

                      <div class="statistics-title">Bitcoin Donations Raised</div>
                    </div>
                  </div>
                  <div class="ourApproach">
                    <div class="mb-5">
                      <div class="main-heading-div">
                        <div class="main-title">Our Approach</div>
                        <button type="button" class="bg-white shadow-sm p-2 d-inline-block border-0">Donate Now</button>
                      </div>
                    </div>
                    <div class="block-grid">
                      <div class="">
                        <div class="title">Direct Giving</div>
                        <div class="fs-14 text-muted">We transfer your donation directly to the end beneficiary - meaning 100% of your money goes to those who need it most.</div>
                      </div>
                      <div class="">
                        <div class="title">Transparency</div>
                        <div class="fs-14 text-muted">We revolutionize global giving by making it more transparent to address challenges facing the social sector such as corruption, lack of trust in nonprofits, high global transfer fees, inefficient processes and lack of accountability in donor spending.</div>
                      </div>
                      <div class="">
                        <div class="title">Transformative Tech</div>
                        <div class="fs-14 text-muted">We believe tech should serve people so we repurpose emerging tech as tools for social change.</div>
                      </div>
                      <div class="">
                        <div class="title">Research</div>
                        <div class="fs-14 text-muted">To better understand and support Web 3 solutions, we invest in the innovation, research and development of it.</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="charity-top-overlay"></div>
              </div>
            </div>
          </div>
    </div>



        <section class="">
        <div class="container">
           <div class="d-flex align-items-center mb-5">
               <div class="commitments-btn active" id="humanitarianAid">Humanitarian Aid</div>
               <div class="commitments-btn" id="supportEducation">Support Education</div>
            </div>
            <div>
                <div class="commitments-div humanitarianAid">
      <div class="commitments-div-img">
        <img src="{{ asset('assets/img/charity/humanitarian-aid.png') }}" class="w-100">
      </div>
      <div class="">
        <div class="block">
          <div class="title">Collaborate</div>
          <div class="fs-14 text-muted">We build meaningful and robust partnerships with leading global humanitarian institutions so we can work to tackle the most pressing needs of vulnerable people.</div>
        </div>
        <div class="block">
          <div class="title">Innovate</div>
          <div class="fs-14 text-muted">We rethink how technology could be used in both times of emergency and to improve lives longer-term. This includes innovative solutions like providing fast, borderless financial assistance and infrastructure so displaced people can directly receive funds anywhere, anytime.</div>
        </div>
        <div class="block mb-0">
          <div class="title">Act</div>
          <div class="fs-14 text-muted">We mobilize the crypto local communities to help deliver basic human needs such as food, medical supplies, shelter and clean water.</div>
        </div>
      </div>
    </div>
                <div class="commitments-div supportEducation hide" >

          <div class="">
        <div class="block">
          <div class="title">Advance</div>
          <div class="fs-14 text-muted">Advance accessibility to education in crypto literacy and Web3 innovation</div>
        </div>
        <div class="block">
          <div class="title">Facilitate</div>
          <div class="fs-14 text-muted">Facilitate career opportunities by championing talented people, with a focus on underrepresented and underprivileged communities.</div>
        </div>
        <div class="block mb-0">
          <div class="title">Invest</div>
          <div class="fs-14 text-muted">Invest in world-class research, with a focus on Web3 social innovation and solutions for positive impact to society.</div>
        </div>
      </div>
       <div class="commitments-div-img ms-0 me-5">
       <svg width="561" height="308" viewBox="0 0 561 308" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 100%; height: 100%;"><path fill-rule="evenodd" clip-rule="evenodd" d="M155.33 120.018L155.33 154.423L183.335 154.423L183.335 180.027L155.33 180.027C141.19 180.027 129.727 168.564 129.727 154.423L129.727 120.018L155.33 120.018Z" fill="#474D57"></path><g opacity="0.6" style="mix-blend-mode: soft-light;"><path fill-rule="evenodd" clip-rule="evenodd" d="M155.33 120.018L155.33 154.423L183.335 154.423L183.335 180.027L155.33 180.027C141.19 180.027 129.727 168.564 129.727 154.423L129.727 120.018L155.33 120.018Z" fill="url(#paint0_linear_3804_86216)"></path></g><path d="M189.102 167.063L204.943 182.904L220.785 167.063L204.943 151.221L189.102 167.063Z" fill="#FFBEA6"></path><path d="M275.352 220.037L275.352 208.835L240.946 208.835L240.946 220.037L275.352 220.037Z" fill="#28D294"></path><g opacity="0.6" style="mix-blend-mode: soft-light;"><path d="M275.352 220.037L275.352 208.835L240.946 208.835L240.946 220.037L275.352 220.037Z" fill="url(#paint1_linear_3804_86216)"></path></g><path fill-rule="evenodd" clip-rule="evenodd" d="M230.474 161.604L238.96 170.091L245.749 163.302L237.263 154.815C229.764 147.316 217.605 147.316 210.106 154.815L197.218 167.703L196.973 203.851L206.574 203.916L206.793 171.707L216.895 161.604C220.645 157.855 226.724 157.855 230.474 161.604Z" fill="#28D294"></path><g opacity="0.6" style="mix-blend-mode: soft-light;"><path fill-rule="evenodd" clip-rule="evenodd" d="M230.474 161.604L238.96 170.091L245.749 163.302L237.263 154.815C229.764 147.316 217.605 147.316 210.106 154.815L197.218 167.703L196.973 203.851L206.574 203.916L206.793 171.707L216.895 161.604C220.645 157.855 226.724 157.855 230.474 161.604Z" fill="url(#paint2_linear_3804_86216)"></path></g><path d="M275.352 220.036L284.954 229.638L290.555 229.638L290.555 199.233L284.954 199.233L275.352 208.835L275.352 220.036Z" fill="#28D294"></path><path d="M272.078 189.632L240.09 157.644L189.736 207.997L221.725 239.986L272.078 189.632Z" fill="#28D294"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M102.977 130.732L102.977 223.284L75.48 223.284L75.4801 130.732L102.977 130.732Z" fill="#929AA5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M76.609 150.439L76.6092 227.287L44.7606 227.287L44.7604 150.439C44.7604 141.855 48.1586 133.628 54.1986 127.588L62.9161 118.87L85.3265 141.722L76.609 150.439Z" fill="#1E2026"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M100.922 227.234V287.243H81.7188V227.234H100.922Z" fill="#FFBEA6"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M72.9216 227.234V287.243H53.7188V227.234H72.9216Z" fill="#FFBEA6"></path><path d="M81.7188 307.246L100.922 307.246L120.595 307.246L100.922 287.243L81.7188 287.243L81.7188 307.246Z" fill="#1E2026"></path><path d="M53.7188 307.246L72.9216 307.246L92.5949 307.246L72.9216 287.243L53.7188 287.243L53.7188 307.246Z" fill="url(#paint3_linear_3804_86216)"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M103.308 68.0005L78.7805 43.3543C62.6688 27.1648 35.0282 38.5751 35.0285 61.4156L35.0287 84.1032L60.6326 84.1029L60.6323 61.4153L85.1602 86.0615L103.308 68.0005Z" fill="#474D57"></path><g opacity="0.6" style="mix-blend-mode: soft-light;"><path fill-rule="evenodd" clip-rule="evenodd" d="M103.308 68.0005L78.7805 43.3543C62.6688 27.1648 35.0282 38.5751 35.0285 61.4156L35.0287 84.1032L60.6326 84.1029L60.6323 61.4153L85.1602 86.0615L103.308 68.0005Z" fill="url(#paint4_linear_3804_86216)"></path></g><path d="M177.305 74.7003C177.305 86.1895 167.991 95.5034 156.502 95.5034C145.012 95.5034 135.698 86.1895 135.698 74.7002L177.305 74.7003Z" fill="#FFBEA6"></path><path d="M177.305 74.7001C177.305 63.2109 167.991 53.897 156.502 53.897C145.012 53.897 135.698 63.2109 135.698 74.7001L177.305 74.7001Z" fill="#1E2026"></path><path d="M35.6719 104.378L50.5113 119.218L65.3508 104.378L50.5113 89.5387L35.6719 104.378Z" fill="#FFBEA6"></path><path d="M155.328 120.017L146.527 111.215H127.324V92.0125L102.52 67.2087L50.5123 119.217L103.32 172.024L155.328 120.017Z" fill="#474D57"></path><path d="M155.328 120.016L146.527 111.215L130.525 127.218L111.322 108.015L127.324 92.0123L118.523 83.2109L72.3972 129.337C65.0447 136.689 60.9141 146.661 60.9141 157.059V264.038H113.322V162.023L155.328 120.016Z" fill="#28D294"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M60.9203 108.816L113.328 162.024L113.332 162.02L122.93 152.423L70.1217 99.615L60.9203 108.816Z" fill="#28D294"></path><g opacity="0.6" style="mix-blend-mode: soft-light;"><path fill-rule="evenodd" clip-rule="evenodd" d="M122.923 152.823L70.5156 99.615L70.5116 99.6189L60.9141 109.216L113.722 162.024L122.923 152.823Z" fill="url(#paint5_linear_3804_86216)"></path></g><path d="M126.899 48.2965C126.899 53.5992 131.197 57.898 136.5 57.898H146.102V48.2965C146.102 42.9938 141.803 38.6951 136.5 38.6951C131.197 38.6951 126.899 42.9938 126.899 48.2965Z" fill="#1E2026"></path><path d="M376.168 307.246C376.168 264.382 341.42 229.635 298.556 229.635H290.555V199.23H298.156C365.186 199.23 421.491 245.149 437.33 307.246H376.168Z" fill="#E6E8EA"></path><path d="M334.562 282.443L343.364 273.641L352.165 282.443L343.364 291.244L334.562 282.443Z" fill="#E6E8EA"></path><path d="M408.172 291.244L414.573 284.843L420.974 291.244L414.573 297.645L408.172 291.244Z" fill="white"></path><path d="M364.164 246.437L368.165 242.437L372.165 246.437L368.165 250.438L364.164 246.437Z" fill="white"></path><path d="M312.961 261.64L316.962 257.639L320.962 261.64L316.962 265.64L312.961 261.64Z" fill="#E6E8EA"></path><path d="M311.289 165.984C328.735 148.538 357.021 148.538 374.467 165.984L394.3 185.817C376.854 203.263 348.568 203.263 331.122 185.817L311.289 165.984Z" fill="#28D294"></path><g opacity="0.6" style="mix-blend-mode: soft-light;"><path d="M311.289 165.985C328.735 148.538 357.021 148.538 374.467 165.985L394.3 185.817C376.854 203.264 348.568 203.264 331.122 185.817L311.289 165.985Z" fill="url(#paint6_linear_3804_86216)"></path></g><path d="M416.703 110.2L456.496 70.4075L480.526 46.4309C502.503 24.454 538.134 24.454 560.111 46.4309L520.319 86.2234L496.288 110.2C474.311 132.177 438.68 132.177 416.703 110.2Z" fill="#28D294"></path><g opacity="0.6" style="mix-blend-mode: soft-light;"><path d="M416.703 110.2L456.496 70.4075L480.526 46.4309C502.503 24.454 538.134 24.454 560.111 46.4309L520.319 86.2234L496.288 110.2C474.311 132.177 438.68 132.177 416.703 110.2Z" fill="url(#paint7_linear_3804_86216)"></path></g><path d="M416.703 137.621L441.907 137.621L468.711 137.621C482.631 137.621 493.915 148.726 493.915 162.425L468.711 162.425L441.907 162.425C427.987 162.425 416.703 151.32 416.703 137.621Z" fill="#28D294"></path><g opacity="0.6" style="mix-blend-mode: soft-light;"><path d="M416.703 137.621L441.907 137.621L468.711 137.621C482.631 137.621 493.915 148.726 493.915 162.425L468.711 162.425L441.907 162.425C427.987 162.425 416.703 151.32 416.703 137.621Z" fill="url(#paint8_linear_3804_86216)"></path></g><path d="M399.092 151.18V270.427L411.894 283.229L411.894 241.509L456.026 197.377L452.066 193.416L411.894 233.588L411.894 76.0112H399.092V143.259L365.351 109.517L361.391 113.478L399.092 151.18Z" fill="#02C076"></path><path d="M361.785 44.5878C361.785 19.9626 381.748 -0.000159657 406.373 -0.000159657C430.998 -0.000159657 450.961 19.9626 450.961 44.5878C450.961 69.2131 430.998 89.1758 406.373 89.1758C381.748 89.1758 361.785 69.2131 361.785 44.5878Z" fill="url(#paint9_linear_3804_86216)"></path><path d="M424.453 44.5874L406.377 62.6636L388.301 44.5874L406.377 26.5112L424.453 44.5874Z" fill="#F0B90B"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M406.373 11.3925C388.04 11.3925 373.178 26.2545 373.178 44.5878C373.178 62.9211 388.04 77.7832 406.373 77.7832C424.706 77.7832 439.568 62.9211 439.568 44.5878C439.568 26.2545 424.706 11.3925 406.373 11.3925ZM406.373 -0.000159657C381.748 -0.000159657 361.785 19.9626 361.785 44.5878C361.785 69.2131 381.748 89.1758 406.373 89.1758C430.998 89.1758 450.961 69.2131 450.961 44.5878C450.961 19.9626 430.998 -0.000159657 406.373 -0.000159657Z" fill="#F8D33A"></path><path d="M439.902 188.83C439.902 177.341 449.215 168.027 460.705 168.027C472.194 168.027 481.508 177.341 481.508 188.83C481.508 200.319 472.194 209.633 460.705 209.633C449.215 209.633 439.902 200.319 439.902 188.83Z" fill="url(#paint10_linear_3804_86216)"></path><path d="M469.141 188.83L460.707 197.264L452.273 188.83L460.707 180.397L469.141 188.83Z" fill="#F0B90B"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M460.705 173.005C451.965 173.005 444.88 180.09 444.88 188.83C444.88 197.57 451.965 204.655 460.705 204.655C469.444 204.655 476.53 197.57 476.53 188.83C476.53 180.09 469.444 173.005 460.705 173.005ZM460.705 168.027C449.215 168.027 439.902 177.341 439.902 188.83C439.902 200.319 449.215 209.633 460.705 209.633C472.194 209.633 481.508 200.319 481.508 188.83C481.508 177.341 472.194 168.027 460.705 168.027Z" fill="#F8D33A"></path><path d="M332.686 108.016C332.686 92.9919 344.865 80.8123 359.89 80.8123C374.914 80.8123 387.094 92.9919 387.094 108.016C387.094 123.041 374.914 135.22 359.89 135.22C344.865 135.22 332.686 123.041 332.686 108.016Z" fill="url(#paint11_linear_3804_86216)"></path><path d="M370.922 108.016L359.893 119.045L348.864 108.016L359.893 96.9873L370.922 108.016Z" fill="#F0B90B"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M359.89 87.3223C348.461 87.3223 339.196 96.5874 339.196 108.016C339.196 119.445 348.461 128.71 359.89 128.71C371.319 128.71 380.584 119.445 380.584 108.016C380.584 96.5874 371.319 87.3223 359.89 87.3223ZM359.89 80.8123C344.865 80.8123 332.686 92.9919 332.686 108.016C332.686 123.041 344.865 135.22 359.89 135.22C374.914 135.22 387.094 123.041 387.094 108.016C387.094 92.9919 374.914 80.8123 359.89 80.8123Z" fill="#F8D33A"></path><path d="M439.901 236.037C439.901 229.851 444.916 224.835 451.103 224.835C457.29 224.835 462.305 229.851 462.305 236.037C462.305 242.224 457.29 247.239 451.103 247.239C444.916 247.239 439.901 242.224 439.901 236.037Z" fill="url(#paint12_linear_3804_86216)"></path><path d="M455.641 236.037L451.099 240.579L446.558 236.037L451.099 231.496L455.641 236.037Z" fill="#F0B90B"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M451.103 227.516C446.397 227.516 442.582 231.331 442.582 236.037C442.582 240.743 446.397 244.558 451.103 244.558C455.809 244.558 459.624 240.743 459.624 236.037C459.624 231.331 455.809 227.516 451.103 227.516ZM451.103 224.835C444.916 224.835 439.901 229.851 439.901 236.037C439.901 242.224 444.916 247.239 451.103 247.239C457.29 247.239 462.305 242.224 462.305 236.037C462.305 229.851 457.29 224.835 451.103 224.835Z" fill="#F8D33A"></path><path d="M375.906 156.027L383.107 148.826L390.308 156.027L383.107 163.228L375.906 156.027Z" fill="#02C076"></path><path d="M420.703 259.384L430.305 249.783L439.906 259.384L430.305 268.986L420.703 259.384Z" fill="#02C076"></path><path d="M294.281 68.8836L309.557 84.1594L324.833 68.8836L309.557 53.6078L294.281 68.8836Z" fill="#F8D33A"></path><g opacity="0.6" style="mix-blend-mode: soft-light;"><path d="M294.281 68.8836L309.557 84.1594L324.833 68.8836L309.557 53.6078L294.281 68.8836Z" fill="url(#paint13_linear_3804_86216)"></path></g><path d="M492.711 262.841L484.31 271.242L475.908 262.841L484.31 254.44L492.711 262.841Z" fill="#F8D33A"></path><g opacity="0.6" style="mix-blend-mode: soft-light;"><path d="M492.711 262.84L484.31 271.241L475.908 262.84L484.31 254.438L492.711 262.84Z" fill="url(#paint14_linear_3804_86216)"></path></g><path d="M324.688 35.6054L329.888 40.8062L335.089 35.6054L329.888 30.4046L324.688 35.6054Z" fill="#F8D33A"></path><g opacity="0.6" style="mix-blend-mode: soft-light;"><path d="M324.688 35.6054L329.888 40.8062L335.089 35.6054L329.888 30.4046L324.688 35.6054Z" fill="url(#paint15_linear_3804_86216)"></path></g><path d="M536.719 254.44L532.718 258.441L528.718 254.44L532.718 250.439L536.719 254.44Z" fill="#F8D33A"></path><g opacity="0.6" style="mix-blend-mode: soft-light;"><path d="M536.719 254.438L532.718 258.439L528.718 254.438L532.718 250.438L536.719 254.438Z" fill="url(#paint16_linear_3804_86216)"></path></g><path d="M507.914 238.837L501.913 232.836L495.912 238.837L501.913 244.838L507.914 238.837Z" fill="#E6E8EA"></path><defs><linearGradient id="paint0_linear_3804_86216" x1="142.528" y1="143.622" x2="183.335" y2="143.622" gradientUnits="userSpaceOnUse"><stop stop-opacity="0.3"></stop><stop offset="1" stop-opacity="0"></stop></linearGradient><linearGradient id="paint1_linear_3804_86216" x1="272.737" y1="215.093" x2="258.149" y2="215.093" gradientUnits="userSpaceOnUse"><stop stop-opacity="0"></stop><stop offset="1"></stop></linearGradient><linearGradient id="paint2_linear_3804_86216" x1="233.02" y1="157.361" x2="205.667" y2="184.713" gradientUnits="userSpaceOnUse"><stop stop-opacity="0"></stop><stop offset="1"></stop></linearGradient><linearGradient id="paint3_linear_3804_86216" x1="85.493" y1="310.866" x2="85.2574" y2="284.724" gradientUnits="userSpaceOnUse"><stop stop-color="#2B2F36"></stop><stop offset="1" stop-color="#474D57"></stop></linearGradient><linearGradient id="paint4_linear_3804_86216" x1="80.9213" y1="90.3439" x2="34.4052" y2="43.8278" gradientUnits="userSpaceOnUse"><stop stop-opacity="0.3"></stop><stop offset="1" stop-opacity="0"></stop></linearGradient><linearGradient id="paint5_linear_3804_86216" x1="68.9153" y1="99.2149" x2="102.988" y2="133.288" gradientUnits="userSpaceOnUse"><stop stop-opacity="0"></stop><stop offset="1"></stop></linearGradient><linearGradient id="paint6_linear_3804_86216" x1="369.356" y1="191.453" x2="321.87" y2="191.453" gradientUnits="userSpaceOnUse"><stop></stop><stop offset="1" stop-opacity="0"></stop></linearGradient><linearGradient id="paint7_linear_3804_86216" x1="424.304" y1="116.628" x2="504.716" y2="116.628" gradientUnits="userSpaceOnUse"><stop></stop><stop offset="1" stop-opacity="0"></stop></linearGradient>
            <linearGradient id="paint8_linear_3804_86216" x1="416.703" y1="137.621" x2="493.515" y2="137.621" gradientUnits="userSpaceOnUse"><stop></stop><stop offset="1" stop-opacity="0"></stop></linearGradient><linearGradient id="paint9_linear_3804_86216" x1="406.373" y1="89.1758" x2="406.373" y2="-0.000160217" gradientUnits="userSpaceOnUse"><stop stop-color="#F0B90B"></stop><stop offset="1" stop-color="#F8D33A"></stop></linearGradient><linearGradient id="paint10_linear_3804_86216" x1="460.705" y1="209.633" x2="460.705" y2="168.027" gradientUnits="userSpaceOnUse"><stop stop-color="#F0B90B"></stop><stop offset="1" stop-color="#F8D33A"></stop></linearGradient><linearGradient id="paint11_linear_3804_86216" x1="359.89" y1="135.22" x2="359.89" y2="80.8123" gradientUnits="userSpaceOnUse"><stop stop-color="#F0B90B"></stop><stop offset="1" stop-color="#F8D33A"></stop></linearGradient><linearGradient id="paint12_linear_3804_86216" x1="451.103" y1="247.239" x2="451.103" y2="224.835" gradientUnits="userSpaceOnUse"><stop stop-color="#F0B90B"></stop><stop offset="1" stop-color="#F8D33A"></stop></linearGradient><linearGradient id="paint13_linear_3804_86216" x1="309.557" y1="84.1594" x2="309.557" y2="53.6078" gradientUnits="userSpaceOnUse"><stop></stop><stop offset="1" stop-opacity="0"></stop></linearGradient><linearGradient id="paint14_linear_3804_86216" x1="484.31" y1="271.241" x2="484.31" y2="254.438" gradientUnits="userSpaceOnUse"><stop></stop><stop offset="1" stop-opacity="0"></stop></linearGradient><linearGradient id="paint15_linear_3804_86216" x1="329.888" y1="40.8062" x2="329.888" y2="30.4046" gradientUnits="userSpaceOnUse"><stop></stop><stop offset="1" stop-opacity="0"></stop></linearGradient><linearGradient id="paint16_linear_3804_86216" x1="532.718" y1="258.439" x2="532.718" y2="250.438" gradientUnits="userSpaceOnUse"><stop></stop><stop offset="1" stop-opacity="0"></stop></linearGradient></defs>
        </svg>
      </div>
    </div>
            </div>
        </div>
    </section>
        <section class="bg-light-blue">
        <div class="container">
             <div class="Direct-Crypto-Benefits">
            <div class="Direct-Crypto-Benefits-left">
              <svg width="100%" height="100%" viewBox="0 0 568 320" fill="none">
                <path d="M374.487 309.999L525.012 158.028C558.595 124.171 558.595 69.1397 525.012 35.3928C491.428 1.53571 436.95 1.53572 403.367 35.3929L374.487 64.5078L345.717 35.3928C312.133 1.53571 257.655 1.53572 224.072 35.3929C190.488 69.25 190.488 124.171 224.072 158.028L374.487 309.999Z" fill="#E6E8EA"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M199.492 107.025C201.694 125.668 209.888 143.727 224.073 158.027L374.488 309.998L525.013 158.027C539.189 143.735 547.382 125.67 549.589 107.025H199.492Z" fill="#F84960"></path>
                <rect x="182.09" y="10" width="7.81055" height="25.7762" fill="#F84960"></rect>
                <rect x="198.883" y="18.9829" width="7.81055" height="25.7762" transform="rotate(90 198.883 18.9829)" fill="#F84960"></rect>
                <rect x="503.711" y="238.707" width="7.81055" height="25.7762" fill="#F84960"></rect>
                <rect x="520.504" y="247.69" width="7.81055" height="25.7762" transform="rotate(90 520.504 247.69)" fill="#F84960"></rect>
                <path d="M306.315 102.358C306.315 113.157 297.561 121.91 286.763 121.91C275.965 121.91 267.211 113.157 267.211 102.358C267.211 91.5602 286.763 65.9966 286.763 65.9966C286.763 65.9966 306.315 91.5602 306.315 102.358Z" fill="#D9304E"></path>
                <path d="M102.202 43.5812C102.202 48.9479 106.553 53.2986 111.919 53.2986H121.637V43.5812C121.637 38.2144 117.286 33.8638 111.919 33.8638C106.553 33.8638 102.202 38.2144 102.202 43.5812Z" fill="#0B0E11"></path>
                <path d="M242.52 109.286L162.352 109.286" stroke="#CB8C54" stroke-width="36.4881"></path>
                <g opacity="0.6" style="mix-blend-mode: soft-light;">
                  <path d="M242.52 109.286L162.352 109.286" stroke="url(#paint0_linear_3841_62114)" stroke-width="36.4881"></path>
                </g>
                <path d="M121.952 79.6345C130.174 87.8568 143.505 87.8568 151.728 79.6345C159.95 71.4123 159.95 58.0814 151.728 49.8592L121.952 79.6345Z" fill="#CB8C54"></path>
                <g opacity="0.6" style="mix-blend-mode: soft-light;">
                  <path d="M121.952 79.6345C130.174 87.8568 143.505 87.8568 151.728 79.6345C159.95 71.4123 159.95 58.0814 151.728 49.8592L121.952 79.6345Z" fill="url(#paint1_linear_3841_62114)"></path>
                </g>
                <path d="M121.954 79.6343C113.732 71.412 113.732 58.0811 121.954 49.8589C130.176 41.6367 143.507 41.6367 151.729 49.8589L121.954 79.6343Z" fill="#0B0E11"></path>
                <rect width="22.6739" height="22.6739" transform="matrix(0.707107 0.707107 0.707107 -0.707107 39.043 48.3892)" fill="#CB8C54"></rect>
                <path d="M151.016 303.522L151.016 266.272" stroke="#CB8C54" stroke-width="36.4881"></path>
                <path d="M146.961 169.209L146.961 266.383" stroke="#2B2F36" stroke-width="49.5196"></path>
                <g opacity="0.6" style="mix-blend-mode: soft-light;">
                  <path d="M146.961 194.093V266.164" stroke="url(#paint2_linear_3841_62114)" stroke-width="52.1259"></path>
                </g>
                <path d="M70.5901 218.388L76.5518 224.349C89.6868 237.484 112.146 228.182 112.146 209.606L112.146 178.927L162.352 178.927" stroke="#2B2F36" stroke-width="49.5196"></path>
                <g opacity="0.6" style="mix-blend-mode: soft-light;">
                  <path d="M70.5898 218.388L76.697 224.495C89.7783 237.576 112.145 228.311 112.145 209.812L112.145 178.9L162.351 178.9" stroke="url(#paint3_linear_3841_62114)" stroke-width="49.5235"></path>
                </g>
                <path d="M91.0898 109.286L70.8691 109.286C60.7932 109.286 52.6251 101.118 52.6251 91.0418L52.6251 70.4163" stroke="#CB8C54" stroke-width="36.4881"></path>
                <g opacity="0.6" style="mix-blend-mode: soft-light;">
                  <path d="M91.0898 109.286L70.8691 109.286C60.7932 109.286 52.6251 101.118 52.6251 91.0418L52.6251 70.4163" stroke="url(#paint4_linear_3841_62114)" stroke-width="36.4881"></path>
                </g>
                <path d="M122.563 97.9487L91.0898 97.9487L91.0898 169.209H162.351V97.9487L151.491 97.9487L137.027 112.413L122.563 97.9487Z" fill="#328DFD"></path>
                <g opacity="0.6" style="mix-blend-mode: soft-light;">
                  <path d="M122.563 97.9487L91.0898 97.9487L91.0898 169.209H162.351V97.9487L151.491 97.9487L137.027 112.413L122.563 97.9487Z" fill="url(#paint5_linear_3841_62114)"></path>
                </g>
                <path d="M38.6138 196.581L54.6466 180.548L50.0658 175.967L18 208.033H50.0658L38.6138 196.581Z" fill="#328DFD"></path>
                <g opacity="0.6" style="mix-blend-mode: soft-light;">
                  <path d="M38.6138 196.581L54.6466 180.548L50.0658 175.967L18 208.033H50.0658L38.6138 196.581Z" fill="url(#paint6_linear_3841_62114)"></path>
                </g>
                <path d="M162.35 303.522H139.676L139.676 310L185.024 310L162.35 287.326L162.35 303.522Z" fill="#328DFD"></path>
                <g opacity="0.6" style="mix-blend-mode: soft-light;">
                  <path d="M162.35 303.522H139.676L139.676 310L185.024 310L162.35 287.326L162.35 303.522Z" fill="url(#paint7_linear_3841_62114)"></path>
                </g>
                <rect x="278.738" y="87.3101" width="22.6739" height="22.6739" transform="rotate(90 278.738 87.3101)" fill="#CB8C54"></rect>
                <path d="M73.6785 215.773L46.5508 188.646" stroke="#CB8C54" stroke-width="36.4881"></path>
                <defs>
                  <linearGradient id="paint0_linear_3841_62114" x1="121.735" y1="1.48545e+13" x2="242.52" y2="1.48545e+13" gradientUnits="userSpaceOnUse">
                    <stop></stop>
                    <stop offset="1" stop-opacity="0"></stop>
                  </linearGradient>
                  <linearGradient id="paint1_linear_3841_62114" x1="115.435" y1="97.8453" x2="149.119" y2="64.1608" gradientUnits="userSpaceOnUse">
                    <stop></stop>
                    <stop offset="1" stop-opacity="0"></stop>
                  </linearGradient>
                  <linearGradient id="paint2_linear_3841_62114" x1="110.237" y1="266.162" x2="155.655" y2="266.162" gradientUnits="userSpaceOnUse">
                    <stop></stop>
                    <stop offset="1" stop-opacity="0"></stop>
                  </linearGradient>
                  <linearGradient id="paint3_linear_3841_62114" x1="67.2069" y1="222.246" x2="157.592" y2="222.246" gradientUnits="userSpaceOnUse">
                    <stop></stop>
                    <stop offset="1" stop-opacity="0"></stop>
                  </linearGradient>
                  <linearGradient id="paint4_linear_3841_62114" x1="120.78" y1="89.851" x2="52.6251" y2="89.851" gradientUnits="userSpaceOnUse">
                    <stop></stop>
                    <stop offset="1" stop-opacity="0"></stop>
                  </linearGradient>
                  <linearGradient id="paint5_linear_3841_62114" x1="91.0898" y1="169.209" x2="134.366" y2="169.209" gradientUnits="userSpaceOnUse">
                    <stop></stop>
                    <stop offset="1" stop-opacity="0"></stop>
                  </linearGradient>
                  <linearGradient id="paint6_linear_3841_62114" x1="18" y1="208.033" x2="40.2551" y2="208.033" gradientUnits="userSpaceOnUse">
                    <stop></stop>
                    <stop offset="1" stop-opacity="0"></stop>
                  </linearGradient>
                  <linearGradient id="paint7_linear_3841_62114" x1="139.676" y1="287.326" x2="167.215" y2="287.326" gradientUnits="userSpaceOnUse">
                    <stop></stop>
                    <stop offset="1" stop-opacity="0"></stop>
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <div class="Direct-Crypto-Benefits-right ">
              <div class="title">Benefits of Direct Crypto Giving</div>
              <div class="fs-16 text-justify text-muted">Crypto has long been able to reach places the traditional financial system cannot, serving those who can’t access typical banking methods.There are more people with mobile devices than bank accounts, which means we can relook at how we build financial infrastructure. Crypto giving is faster, less costly, and more transparent than other methods, and importantly, people don’t need bank accounts, just access to digital wallets.</div>
            </div>
          </div>

        <div class="Direct-Crypto-block">
          <div class="block">
            <div class="">
              <div class="max-width-90px mb-3">
                <svg viewBox="0 0 96 96" fill="none" class="">
                  <path d="M20 80h56V60.5C76 54.149 70.777 49 64.333 49h-6.222L48 58.967 37.889 49h-6.222C25.223 49 20 54.149 20 60.5V80z" fill="url(#team_svg__paint0_linear_26712_54966)"></path>
                  <path d="M3 77h15V52h-5.217C7.38 52 3 56.477 3 62v15z" fill="url(#team_svg__paint1_linear_26712_54966)"></path>
                  <path d="M3 80h15V52h-5.217C7.38 52 3 56.477 3 62v18z" fill="#E6E8EA"></path>
                  <path d="M3 80h15V52h-5.217C7.38 52 3 56.477 3 62v18z" fill="url(#team_svg__paint2_linear_26712_54966)"></path>
                  <path d="M93 80H78V52h5.217C88.62 52 93 56.477 93 62v18z" fill="url(#team_svg__paint3_linear_26712_54966)"></path>
                  <path d="M38.1 38.9c-5.467-5.468-5.467-14.332 0-19.8 5.468-5.467 14.332-5.467 19.8 0 5.467 5.468 5.467 14.332 0 19.8-5.468 5.467-14.332 5.467-19.8 0z" fill="url(#team_svg__paint4_linear_26712_54966)"></path>
                  <path opacity="0.3" d="M86 21.5l3.5 3.5 3.5-3.5-3.5-3.5-3.5 3.5zM25 8l3 3 3-3-3-3-3 3zM2 44l2 2 2-2-2-2-2 2zM14.636 43.364a9 9 0 1112.728-12.728 9 9 0 01-12.728 12.728zM68.636 43.364a9 9 0 1112.728-12.728 9 9 0 01-12.728 12.728z" fill="#AEB4BC"></path>
                  <path d="M48 59L38 49v31h20V49L48 59z" fill="url(#team_svg__paint5_linear_26712_54966)"></path>
                  <defs>
                    <linearGradient id="team_svg__paint0_linear_26712_54966" x1="48" y1="49" x2="48" y2="80" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#929AA5"></stop>
                      <stop offset="1" stop-color="#76808F"></stop>
                    </linearGradient>
                    <linearGradient id="team_svg__paint1_linear_26712_54966" x1="18" y1="76.969" x2="3.191" y2="76.969" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#474D57"></stop>
                      <stop offset="1" stop-color="#0B0E11"></stop>
                    </linearGradient>
                    <linearGradient id="team_svg__paint2_linear_26712_54966" x1="10.5" y1="52" x2="10.5" y2="80" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#929AA5"></stop>
                      <stop offset="1" stop-color="#76808F"></stop>
                    </linearGradient>
                    <linearGradient id="team_svg__paint3_linear_26712_54966" x1="85.5" y1="52" x2="85.5" y2="80" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#929AA5"></stop>
                      <stop offset="1" stop-color="#76808F"></stop>
                    </linearGradient>
                    <linearGradient id="team_svg__paint4_linear_26712_54966" x1="48" y1="43" x2="48" y2="15" gradientUnits="userSpaceOnUse">
                      <stop offset="0.333" stop-color="#F0B90B"></stop>
                      <stop offset="1" stop-color="#FBDA3C"></stop>
                    </linearGradient>
                    <linearGradient id="team_svg__paint5_linear_26712_54966" x1="48" y1="80" x2="48" y2="49" gradientUnits="userSpaceOnUse">
                      <stop offset="0.333" stop-color="#F0B90B"></stop>
                      <stop offset="1" stop-color="#FBDA3C"></stop>
                    </linearGradient>
                  </defs>
                </svg>
              </div>
              <div class="title">NGOs</div>
              <div class="fs-16 text-muted text-center fw-normal">We’re building a strong and trusted network of partners, so we connect global solutions to local problems. We work with both major international organizations and grassroots local nonprofits.</div>
            </div>
            <button type="button" class="">View More</button>
          </div>
          <div class="block">
            <div class="">
              <div class="max-width-90px mb-3">
                <svg viewBox="0 0 96 96" fill="none" class="">
                  <path d="M36 54l12 12 12-12v30H36V54z" fill="url(#user-light_svg__paint0_linear_9461:24851)"></path>
                  <path d="M47.998 46.001c-9.941 0-18-8.06-18-18 0-9.942 8.059-18 18-18 9.94 0 18 8.06 18 18 0 9.941-8.059 18-18 18z" fill="url(#user-light_svg__paint1_linear_9461:24851)"></path>
                  <path d="M77 46l4 4 4-4-4-4-4 4zM20 8l3 3 3-3-3-3-3 3zM8 37l2 2 2-2-2-2-2 2z" fill="#E6E8EA"></path>
                  <path d="M36 54h-8c-8.837 0-16 7.163-16 16v14h24V54z" fill="url(#user-light_svg__paint2_linear_9461:24851)"></path>
                  <path d="M60 84h24V70c0-8.837-7.163-16-16-16h-8v30z" fill="url(#user-light_svg__paint3_linear_9461:24851)"></path>
                  <defs>
                    <linearGradient id="user-light_svg__paint0_linear_9461:24851" x1="48" y1="84" x2="48" y2="54" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#F0B90B"></stop>
                      <stop offset="1" stop-color="#F8D33A"></stop>
                    </linearGradient>
                    <linearGradient id="user-light_svg__paint1_linear_9461:24851" x1="47.998" y1="46.001" x2="47.998" y2="10" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#F0B90B"></stop>
                      <stop offset="1" stop-color="#F8D33A"></stop>
                    </linearGradient>
                    <linearGradient id="user-light_svg__paint2_linear_9461:24851" x1="48" y1="54" x2="48" y2="84" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#929AA5"></stop>
                      <stop offset="1" stop-color="#76808F"></stop>
                    </linearGradient>
                    <linearGradient id="user-light_svg__paint3_linear_9461:24851" x1="48" y1="54" x2="48" y2="84" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#929AA5"></stop>
                      <stop offset="1" stop-color="#76808F"></stop>
                    </linearGradient>
                  </defs>
                </svg>
              </div>
              <div class="title">Individuals</div>
              <div class="fs-16 text-muted text-center fw-normal">People are key to driving the success of Web3 for social change. We’re always looking for talented, influential and active individuals to help us achieve maximum impact.</div>
            </div>
            <button type="button" class="">View More</button>
          </div>
          <div class="block">
            <div class="">
              <div class="max-width-90px mb-3">
                <svg width="100%" height="100%" viewBox="0 0 96 96" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M22.0003 32C16.4774 32 12.0003 27.5228 12.0003 22L12.0002 45L25 44.9996V58.0001H12.0001L12 71H25L25.0001 84H84.0003V32H38.0001V44.9996H25V32H22.0003ZM25 71V58.0001L38.0001 58V71.0001L25 71Z" fill="url(#paint0_linear_5275_25569)"></path>
                  <path d="M22 12H84.0008V32H22C16.4772 32 12 27.5228 12 22C12 16.4772 16.4772 12 22 12Z" fill="#76808F"></path>
                  <path d="M84 48V68H64V48H84Z" fill="#76808F"></path>
                  <defs>
                    <linearGradient id="paint0_linear_5275_25569" x1="48.0001" y1="22" x2="48.0001" y2="84" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#F0B90B"></stop>
                      <stop offset="1" stop-color="#F8D33A"></stop>
                    </linearGradient>
                  </defs>
                </svg>
              </div>
              <div class="title">Wealthmark Charity Wallet</div>
              <div class="fs-16 text-muted text-center fw-normal">Wealthmark Charity Wallet is for those who want to give but may not wish to choose between projects. Your donation will be kept securely in the wallet for the team at Wealthmark Charity to distribute to a worthy cause.</div>
            </div>
            <button type="button" class="">View More</button>
          </div>
        </div>

        </div>



    </section>
        <!--====================================================================================-->
        <div class="donation-section">
          <div class="">
            <div class="heading-div">
              <div class="main-title">Donation Flow</div>

                <div class="donation-section-btn-div">

                    <div class="btns" id="tab-NGO">NGOs</div>


                    <div class="active btns" id="tab-INDIVIDUAL">Individuals</div>



              </div>
            </div>
            <div class="donationFlow-main-div">
              <div class="donationFlow-div">
                <div class="block">
                  <div class="icon">
                    <svg width="100%" height="100%" viewBox="0 0 64 64" fill="none">
                      <path d="M14.3086 54.0351C17.7826 57.5091 21.1579 58.6673 24.0936 58.6673L39.4225 58.66C44.9533 58.66 49.437 54.1763 49.437 48.6454L30.9229 48.6454L24.8973 42.5549L26.1635 41.2887L30.0487 45.1738C32.3174 47.4425 35.9957 47.4425 38.2645 45.1738L28.4249 35.3342L14.3086 35.334V54.0351Z" fill="url(#paint0_linear_4816_22654)"></path>
                      <rect x="5.33203" y="35.334" width="8.97436" height="23.3333" fill="url(#paint1_linear_4816_22654)"></rect>
                      <path opacity="0.3" d="M10.6641 21.2998L14.6641 25.2998L10.6641 29.2998L6.66406 25.2998L10.6641 21.2998Z" fill="#AEB4BC"></path>
                      <path opacity="0.3" d="M56.3594 56.3338L58.6927 54.0005L61.026 56.3338L58.6927 58.6672L56.3594 56.3338Z" fill="#AEB4BC"></path>
                      <path opacity="0.3" d="M52.668 8.00195H56.0013L56.0013 11.3353L52.668 11.3353L52.668 8.00195Z" fill="#AEB4BC"></path>
                      <circle r="9.99998" transform="matrix(1 0 0 -1 30.5703 15.2998)" fill="#F8D33A"></circle>
                      <ellipse rx="6.84209" ry="6.84209" transform="matrix(1 0 0 -1 30.5687 15.301)" fill="url(#paint2_linear_4816_22654)"></ellipse>
                      <path d="M26.8867 15.2997L30.5709 18.9839L34.2551 15.2997L30.5709 11.6155L26.8867 15.2997Z" fill="#F0B90B"></path>
                      <circle r="9.99998" transform="matrix(1 0 0 -1 48.6914 33.4229)" fill="#F8D33A"></circle>
                      <ellipse rx="6.84209" ry="6.84209" transform="matrix(1 0 0 -1 48.6897 33.424)" fill="url(#paint3_linear_4816_22654)"></ellipse>
                      <path d="M45.0078 33.4227L48.692 37.1069L52.3762 33.4227L48.692 29.7385L45.0078 33.4227Z" fill="#F0B90B"></path>
                      <defs>
                        <linearGradient id="paint0_linear_4816_22654" x1="30.3757" y1="35.334" x2="30.3757" y2="58.6673" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#F8D33A"></stop>
                          <stop offset="1" stop-color="#F0B90B"></stop>
                        </linearGradient>
                        <linearGradient id="paint1_linear_4816_22654" x1="14.3062" y1="41.9187" x2="5.33203" y2="41.9187" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#929AA5"></stop>
                          <stop offset="1" stop-color="#76808F"></stop>
                        </linearGradient>
                        <linearGradient id="paint2_linear_4816_22654" x1="6.84209" y1="0" x2="6.84209" y2="13.6842" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#F0B90B"></stop>
                          <stop offset="1" stop-color="#F8D33A"></stop>
                        </linearGradient>
                        <linearGradient id="paint3_linear_4816_22654" x1="6.84209" y1="0" x2="6.84209" y2="13.6842" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#F0B90B"></stop>
                          <stop offset="1" stop-color="#F8D33A"></stop>
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                  <div class="content">Donor gives to Wealthmark Charity in crypto.</div>
                </div>
                <div class="df-arrow">
                  <svg viewBox="0 0 24 24" fill="none" class="arrow-icon ">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.121 5l7.071 7.071-.025.025.025.025-7.07 7.071L11 17.072l4.975-4.976L11 7.121 13.121 5zm-7 0l7.071 7.071-.025.025.025.025-7.07 7.071L4 17.072l4.975-4.976L4 7.121 6.121 5z" fill="currentColor"></path>
                  </svg>
                </div>
              </div>
              <div class="donationFlow-div">
                <div class="block">
                  <div class="icon">
                    <svg width="100%" height="100%" viewBox="0 0 64 64" fill="none">
                      <path d="M8 14.6667C8 18.3486 10.9848 21.3333 14.6667 21.3333H56V56H16C11.5817 56 8 52.4183 8 48V14.6667Z" fill="url(#paint0_linear_4816_22681)"></path>
                      <path d="M14.6667 8H56.0005V21.3333H14.6667C10.9848 21.3333 8 18.3486 8 14.6667C8 10.9848 10.9848 8 14.6667 8Z" fill="#76808F"></path>
                      <path d="M56 32V45.3333H42.6667V32H56Z" fill="#76808F"></path>
                      <defs>
                        <linearGradient id="paint0_linear_4816_22681" x1="32" y1="56" x2="32" y2="14.6667" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#F0B90B"></stop>
                          <stop offset="1" stop-color="#F8D33A"></stop>
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                  <div class="content">Wealthmark Charity partnered with local NGOs to help beneficiaries open a crypto wallet.</div>
                </div>
                <div class="df-arrow">
                  <svg viewBox="0 0 24 24" fill="none" class="arrow-icon ">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.121 5l7.071 7.071-.025.025.025.025-7.07 7.071L11 17.072l4.975-4.976L11 7.121 13.121 5zm-7 0l7.071 7.071-.025.025.025.025-7.07 7.071L4 17.072l4.975-4.976L4 7.121 6.121 5z" fill="currentColor"></path>
                  </svg>
                </div>
              </div>
              <div class="donationFlow-div">
                <div class="block">
                  <div class="icon">
                    <svg width="100%" height="100%" viewBox="0 0 64 64" fill="none">
                      <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M56 56.001H8V28.001H56V56.001ZM12.6667 32.6676L14.6667 30.6676L16.6667 32.6676L14.6667 34.6676L12.6667 32.6676ZM43.3333 50.3343L44.3333 49.3343L45.3333 50.3343L44.3333 51.3343L43.3333 50.3343Z" fill="#AEB4BC"></path>
                      <path opacity="0.6" d="M53.332 20.0008L54.6654 18.6675L55.9987 20.0008L54.6654 21.3341L53.332 20.0008Z" fill="#76808F"></path>
                      <ellipse rx="12.83" ry="12.83" transform="matrix(1 0 0 -1 31.998 34.4429)" fill="#F8D33A"></ellipse>
                      <ellipse rx="9.29072" ry="9.29072" transform="matrix(1 0 0 -1 31.9977 34.4422)" fill="url(#paint0_linear_4816_22696)"></ellipse>
                      <path d="M27.1328 34.4425L31.9994 39.3091L36.8659 34.4425L31.9994 29.5759L27.1328 34.4425Z" fill="#F0B90B"></path>
                      <ellipse rx="6.66667" ry="6.66667" transform="matrix(1 0 0 -1 51.9167 44.849)" fill="#F8D33A"></ellipse>
                      <ellipse rx="4.84849" ry="4.84848" transform="matrix(1 0 0 -1 51.9188 44.8488)" fill="url(#paint1_linear_4816_22696)"></ellipse>
                      <path d="M49.4922 44.8487L51.9164 47.2729L54.3407 44.8487L51.9164 42.4245L49.4922 44.8487Z" fill="#F0B90B"></path>
                      <circle r="8" transform="matrix(1 0 0 -1 13.332 50.667)" fill="#F8D33A"></circle>
                      <ellipse rx="5.81818" ry="5.81818" transform="matrix(1 0 0 -1 13.3338 50.6672)" fill="url(#paint2_linear_4816_22696)"></ellipse>
                      <path d="M10.4219 50.6671L13.331 53.5762L16.2401 50.6671L13.331 47.758L10.4219 50.6671Z" fill="#F0B90B"></path>
                      <path opacity="0.6" d="M11.332 6.66748L9.33203 8.66748L11.332 10.6675L13.332 8.66748L11.332 6.66748Z" fill="#76808F"></path>
                      <path d="M45.8594 19.1675L18.1387 19.1675L31.999 5.30713L45.8594 19.1675Z" fill="#76808F"></path>
                      <defs>
                        <linearGradient id="paint0_linear_4816_22696" x1="9.29072" y1="0" x2="9.29072" y2="18.5814" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#F0B90B"></stop>
                          <stop offset="1" stop-color="#F8D33A"></stop>
                        </linearGradient>
                        <linearGradient id="paint1_linear_4816_22696" x1="4.84849" y1="0" x2="4.84849" y2="9.69697" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#F0B90B"></stop>
                          <stop offset="1" stop-color="#F8D33A"></stop>
                        </linearGradient>
                        <linearGradient id="paint2_linear_4816_22696" x1="5.81818" y1="0" x2="5.81818" y2="11.6364" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#F0B90B"></stop>
                          <stop offset="1" stop-color="#F8D33A"></stop>
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                  <div class="content">Wealthmark Charity send donations to beneficiaries directly in crypto.</div>
                </div>
                <div class="df-arrow">
                  <svg viewBox="0 0 24 24" fill="none" class="arrow-icon ">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.121 5l7.071 7.071-.025.025.025.025-7.07 7.071L11 17.072l4.975-4.976L11 7.121 13.121 5zm-7 0l7.071 7.071-.025.025.025.025-7.07 7.071L4 17.072l4.975-4.976L4 7.121 6.121 5z" fill="currentColor"></path>
                  </svg>
                </div>
              </div>
              <div class="donationFlow-div">
                <div class="block">
                  <div class="icon">
                    <svg width="100%" height="100%" viewBox="0 0 64 64" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.33203 10.6665H58.6654V49.9998H5.33203V10.6665ZM10.6654 37.3332H26.6654V31.9998L10.6654 31.9998L10.6654 37.3332Z" fill="url(#paint0_linear_4816_27075)"></path>
                      <path opacity="0.3" d="M34 5.33317L36.6667 2.6665L39.3333 5.33317L36.6667 7.99984L34 5.33317Z" fill="#AEB4BC"></path>
                      <ellipse rx="13.3333" ry="13.3333" transform="matrix(1 0 0 -1 48.0013 45.3332)" fill="#F8D33A"></ellipse>
                      <ellipse rx="9.65517" ry="9.65517" transform="matrix(1 0 0 -1 48.0028 45.3326)" fill="url(#paint1_linear_4816_27075)"></ellipse>
                      <path d="M42.9453 45.3332L48.0028 50.3906L53.0603 45.3332L48.0028 40.2757L42.9453 45.3332Z" fill="#F0B90B"></path>
                      <path d="M58.6654 26.6665L5.33203 26.6665L5.33203 18.6665L58.6654 18.6665L58.6654 26.6665Z" fill="url(#paint2_linear_4816_27075)"></path>
                      <path opacity="0.3" d="M26.668 37.3335L10.668 37.3335L10.668 32.0002L26.668 32.0002L26.668 37.3335Z" fill="#AEB4BC"></path>
                      <path opacity="0.3" d="M10.668 55.3335L12.668 57.3335L14.668 55.3335L12.668 53.3335L10.668 55.3335Z" fill="#AEB4BC"></path>
                      <path opacity="0.3" d="M0.667969 20.6665H2.66797V18.6665H0.667969V20.6665Z" fill="#AEB4BC"></path>
                      <defs>
                        <linearGradient id="paint0_linear_4816_27075" x1="58.6654" y1="10.6665" x2="5.33203" y2="10.6665" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#929AA5"></stop>
                          <stop offset="1" stop-color="#76808F"></stop>
                        </linearGradient>
                        <linearGradient id="paint1_linear_4816_27075" x1="9.65517" y1="0" x2="9.65517" y2="19.3103" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#F0B90B"></stop>
                          <stop offset="1" stop-color="#F8D33A"></stop>
                        </linearGradient>
                        <linearGradient id="paint2_linear_4816_27075" x1="5.33203" y1="22.6665" x2="58.6654" y2="22.6665" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#F0B90B"></stop>
                          <stop offset="1" stop-color="#F8D33A"></stop>
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                  <div class="content">Beneficiaries can spend their crypto online or offline using Wealthmark Pay or Wealthmark Card.</div>
                </div>
                <div class="df-arrow">
                  <svg viewBox="0 0 24 24" fill="none" class="arrow-icon ">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.121 5l7.071 7.071-.025.025.025.025-7.07 7.071L11 17.072l4.975-4.976L11 7.121 13.121 5zm-7 0l7.071 7.071-.025.025.025.025-7.07 7.071L4 17.072l4.975-4.976L4 7.121 6.121 5z" fill="currentColor"></path>
                  </svg>
                </div>
              </div>
              <div class="donationFlow-div">
                <div class="block">
                  <div class="icon">
                    <svg width="100%" height="100%" viewBox="0 0 64 64" fill="none">
                      <path opacity="0.3" d="M56.668 36.3332L58.3346 34.6665L60.0013 36.3332L58.3346 37.9998L56.668 36.3332Z" fill="#AEB4BC"></path>
                      <path opacity="0.3" d="M15.332 6.33333L17.6654 4L19.9987 6.33333L17.6654 8.66667L15.332 6.33333Z" fill="#AEB4BC"></path>
                      <path opacity="0.3" d="M4 45.9998L5.33333 44.6665L6.66667 45.9998L5.33333 47.3332L4 45.9998Z" fill="#AEB4BC"></path>
                      <path d="M8 53.3332L8 50.6665L56 50.6665L56 53.3332L8 53.3332Z" fill="#76808F"></path>
                      <rect opacity="0.3" x="13.332" y="28" width="5.33333" height="22.6667" fill="#AEB4BC"></rect>
                      <rect opacity="0.3" x="24" y="28" width="5.33333" height="22.6667" fill="#AEB4BC"></rect>
                      <rect opacity="0.3" x="34.668" y="28" width="5.33333" height="22.6667" fill="#AEB4BC"></rect>
                      <rect opacity="0.3" x="45.332" y="28" width="5.33334" height="22.6667" fill="#AEB4BC"></rect>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M55.9998 22.6667L32 4L8 22.6667V28L56 28L55.9998 22.6667ZM28.6667 18L32 21.3333L35.3333 18L32 14.6667L28.6667 18Z" fill="url(#paint0_linear_4816_27099)"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M31.9987 24.6668C35.6806 24.6668 38.6654 21.6821 38.6654 18.0002C38.6654 14.3183 35.6806 11.3335 31.9987 11.3335C28.3168 11.3335 25.332 14.3183 25.332 18.0002C25.332 21.6821 28.3168 24.6668 31.9987 24.6668ZM28.6654 18.0002L31.9987 21.3335L35.332 18.0002L31.9987 14.6668L28.6654 18.0002Z" fill="#76808F"></path>
                      <path d="M8 53.3332L8 58.6665L56 58.6665L56 53.3332L8 53.3332Z" fill="url(#paint1_linear_4816_27099)"></path>
                      <defs>
                        <linearGradient id="paint0_linear_4816_27099" x1="32" y1="28" x2="32" y2="4" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#F0B90B"></stop>
                          <stop offset="1" stop-color="#F8D33A"></stop>
                        </linearGradient>
                        <linearGradient id="paint1_linear_4816_27099" x1="8" y1="55.9998" x2="56" y2="55.9998" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#F0B90B"></stop>
                          <stop offset="1" stop-color="#F8D33A"></stop>
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                  <div class="content">Beneficiaries can also withdraw cash to their bank account or from ATM using Wealthmark Card</div>
                </div>
                <div class="df-arrow">
                  <svg viewBox="0 0 24 24" fill="none" class="arrow-icon ">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.121 5l7.071 7.071-.025.025.025.025-7.07 7.071L11 17.072l4.975-4.976L11 7.121 13.121 5zm-7 0l7.071 7.071-.025.025.025.025-7.07 7.071L4 17.072l4.975-4.976L4 7.121 6.121 5z" fill="currentColor"></path>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class="wm-pay-accordian-section">
      <div class="container">
        <div class="outlet-main-div">
          <div class="wm-outlet-div">
            <div class="sec-title text-center mb-2">
              <h2 class="heading-h2">FAQs</h2>
            </div>
          </div>
          <div class="wm-outlet-div text-right justify-content-end">
            <a href="javascript:void(0)" class="learn-more btn-6">
              <span>Learn More </span>
              <span>
                <i class="bi bi-chevron-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-head" id="headingOne">
              <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> Why did Wealthmark establish the Blockchain Charity Foundation? </h2>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <div class="text"> Wealthmark is dedicated to spreading the freedom of money, and we believe everyone in the world, regardless of their social status or geographic location, should be entitled to possess this freedom. BCF was thus established to share this freedom with people who are usually inaccessible to formal social and financial services.</div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-head" id="headingTwo">
              <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> How is BCF different from traditional charity organizations and platforms? </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <div class="text">BCF is the first known non-profit organization that enables charitable giving with cryptocurrency on its blockchain-enabled platform that provides transparent and immutable records of donations. Bearing a loving heart and entrepreneurial spirit, we work on the ground to understand the needs firsthand, and continue improving our approach in solving deep-rooted “last-mile” issues in the philanthropy sphere.</div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-head" id="headingThree">
              <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Who is the team behind BCF? </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <div class="text">Our team has a diverse professional and cultural background, strong roots in social development and impact investing, as well as advantageous expertise in both technology and business. Led by Helen Hai, the United Nations Industrial Development Organization (UNIDO) Goodwill Ambassador and Young Global Leader of the World Economic Forum, BCF is determined to create practical and scalable solutions for various social problems.</div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-head" id="headingFour">
              <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> What kind of currency does BCF accept for donations? Do you only accept cryptocurrency, and if so, which ones? Do you accept fiat? </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">
                <div class="text">BCF accepts both cryptocurrency and fiat with a preference for crypto. We currently accept BNB, ETH and BTC, with more cryptocurrencies to be supported in the near future. We also accept fiat donations. For example, TRON donated 3 million USD, which has been used for different projects and will be exchanged to cryptocurrency when needed.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    @include('template.country_language')
    @include('template.web_footer')
    <script src="{{ asset('assets/css/accordian_bootstrap.min.js') }}"></script>
    <script>
        $('.commitments-btn').click(function(){
            var a = $(this).attr("id");
            $(this).addClass('active');
             $(this).siblings().removeClass("active");
            $("." + a).removeClass("hide");
            $("." + a).siblings().addClass("hide");
        });
    </script>
  </body>
</html>
