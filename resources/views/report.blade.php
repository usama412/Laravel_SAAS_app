<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- <link rel="stylesheet" href="1.css"> --}}
  <link rel="shortcut icon" href="img/favico.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<script src="https://kit.fontawesome.com/f2160b4ca1.js" crossorigin="anonymous"></script>
	
	
  <title>Reports - Max Allowance</title>
<!-- CSS -->
<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" type="text/css" href={{url("vendors/styles/core.css")}}>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" type="text/css" href={{url("vendors/styles/icon-font.min.css")}}>
	<link rel="stylesheet" type="text/css" href={{url("src/plugins/datatables/css/dataTables.bootstrap4.min.css")}}>
	<link rel="stylesheet" type="text/css" href={{url("src/plugins/datatables/css/responsive.bootstrap4.min.css")}}>
	<link rel="stylesheet" type="text/css" href={{url("vendors/styles/style.css")}}>
  <style>
    @charset 'UTF-8';

    /* Slider */
    .slick-loading .slick-list {
      background: #fff url('./ajax-loader.gif') center center no-repeat
    }
body {
    background-color: #f8fafc;
    color: #212529;
    font-family: Nunito, sans-serif;
    font-size: .9rem;
    font-weight: 400;
    line-height: 1.6;
    margin: 0;
    text-align: left
}
@media (min-width: 768px) {
    .prepaid-modal__btns {
        flex-direction: row;
        column-gap: 15px;
    }
}

.prepaid-modal__btns .button {
    height: 50px;
    font-size: 16px;
    font-weight: 600;
}

.prepaid-modal__btns .button::after {
    content: none;
}

.prepaid-modal__close-btn {
    position: absolute;
    top: 5px;
    right: 5px;
    width: 24px;
    height: 24px;
    background-image: url("/img2/crosses/modal-close-icon.svg");
    background-repeat: no-repeat;
    background-position: center;
}


.prepaid-card {
    display: flex;
    flex-direction: column;
    row-gap: 10px;
    margin-bottom: 20px;
}

.use-prepaid,
.use-funds {
    display: flex;
    align-items: center;
    justify-content: space-between;
    column-gap: 15px;
    height: 50px;
    padding: 14px 20px;
    font-size: 16px;
    border-radius: 50px;
}

.use-funds {
    display: none;
    color: var(--basic-black);
    font-weight: 700;
    background-color: #dfdfdf;
}

.use-funds.active {
    display: flex;
}

.use-funds.disabled {
    opacity: 0.6;
    cursor: auto;
}

.use-prepaid::after {
    content: none;
}

.prepaid-card .badge {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 22px;
    height: 22px;
    padding: 0 6px;
    font-size: 12px;
    line-height: 1.3;
    font-weight: 600;
    color: var(--basic-black);
    background-color: var(--basic-white);
    border-radius: 50%;
}


.js-scroll-payment {
    cursor: pointer;
}

.trial-block.hide {
    display: none;
}

.unlim-block.hide {
    display: none;
}

.driving-checkout__holder {
    max-width: 1140px;
}

.driving-checkout__row {
    display: grid;
    row-gap: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
}

.driving-checkout__head {
    display: flex;
    flex-direction: column;
    row-gap: 10px;
    margin-bottom: 20px;
}

.driving-checkout__title {
    text-wrap: balance;
}

.driving-checkout__text {
    margin: 0;
    font-size: 15px;
    line-height: 1.4;
    color: var(--basick-black);
}

.driving-checkout .accent {
    color: var(--main-blue);
}

@media (max-width: 991px) {
    .driving-checkout__row .precheck-faq {
        display: none;
    }
}

@media (min-width: 992px) {
    .driving-checkout__row {
        grid-template-columns: 1fr 440px;
        align-items: start;
        column-gap: 20px;
        padding-top: 0;
        padding-bottom: 0;
    }

    .driving-checkout__content {
        padding-top: 30px;
    }

    .driving-checkout__faq-mobile {
        display: none;
    }

    #confirm-overlay {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 10;
        display: block;
        width: 100%;
        height: 100%;
        overflow-y: auto;
        background-color: rgba(0, 0, 0, 0.7);
        transform: scale(1.2);
        visibility: hidden;
        opacity: 0;
        -webkit-overflow-scrolling: touch;
        pointer-events: none;
        transition: opacity .3s cubic-bezier(.55, 0, .1, 1), transform .3s cubic-bezier(.55, 0, .1, 1), visibility .3s cubic-bezier(.55, 0, .1, 1);
    }

    #confirm-overlay.active {
        transform: scale(1);
        visibility: visible;
        opacity: 1;
        pointer-events: auto
    }
}

@media (min-width: 1200px) {
    .driving-checkout__head {
        margin-bottom: 25px;
    }
}

.precheck-sample {
    margin-bottom: 20px;
}

.precheck-sample__top {
    display: grid;
    grid-template-columns: 80px 1fr;
    align-items: center;
    column-gap: 15px;
    row-gap: 20px;
    margin-bottom: 20px;
}

.precheck-sample__img {
    width: 180px;
    height: 80px;
    object-fit: contain;
    border-radius: 6px;
}

.precheck-sample__title {
    margin: 0 0 6px;
    font-size: 18px;
    line-height: 1.3;
    font-weight: 600;
    color: var(--basic-black);
}

.precheck-sample__vin {
    margin: 0;
    font-size: 15px;
    line-height: normal;
    font-weight: 500;
    color: var(--basic-black);
    text-transform: uppercase;
}

.precheck-sample__specs {
    grid-column: 1 / 3;
}

@media (min-width: 768px) {
    .precheck-sample__top {
        grid-template-columns: 219px 1fr;
        column-gap: 20px;
        row-gap: 16px;
    }

    .precheck-sample__img {
        grid-row: 1 / 3;
        width: 219px;
        height: 164px;
        object-fit: contain;
    }

    .precheck-sample__specs {
        grid-column: 2 / 3;
    }
}

@media (min-width: 1200px) {
    .precheck-sample {
        margin-bottom: 25px;
    }
}

.container,
.container-fluid,
.container-lg,
.container-md,
.container-sm,
.container-xl {
    margin-left: auto;
    margin-right: auto;
    padding-left: 15px;
    padding-right: 15px;
    width: 100%
}

@media (min-width:576px) {

    .container,
    .container-sm {
        max-width: 540px
    }
}

@media (min-width:768px) {

    .container,
    .container-md,
    .container-sm {
        max-width: 720px
    }
}

@media (min-width:992px) {

    .container,
    .container-lg,
    .container-md,
    .container-sm {
        max-width: 960px
    }
}

@media (min-width:1200px) {

    .container,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl {
        max-width: 1140px
    }
}

@media (max-width: 991px) {
    .driving-checkout__row .precheck-faq {
        display: none;
    }
}

@media (min-width: 992px) {
    .driving-checkout__row {
        grid-template-columns: 1fr 440px;
        align-items: start;
        column-gap: 20px;
        padding-top: 0;
        padding-bottom: 0;
}
.driving-checkout__content {
        padding-top: 30px;
    }
}

@media (min-width: 1200px) {
    .driving-checkout__head {
        margin-bottom: 25px;
    }
}

 .driving-checkout__head {
    display: flex;
    flex-direction: column;
    row-gap: 10px;
    margin-bottom: 20px;
}
.driving-checkout__title {
    text-wrap: balance;
}
 .trial-block.hide {
    display: none;
}
.unlim-block.hide {
    display: none;
}
 .driving-checkout__text {
    margin: 0;
    font-size: 15px;
    line-height: 1.4;
    color: var(--basick-black);
}
.driving-checkout .accent {
    color: var(--main-blue);
}
  .js-scroll-payment {
    cursor: pointer;
}
.precheck-sample {
    margin-bottom: 20px;
}

.precheck-sample__top {
    display: grid;
    grid-template-columns: 80px 1fr;
    align-items: center;
    column-gap: 15px;
    row-gap: 20px;
    margin-bottom: 20px;
}


.precheck-sample__title {
    margin: 0 0 6px;
    font-size: 18px;
    line-height: 1.3;
    font-weight: 600;
    color: var(--basic-black);
}

.precheck-sample__vin {
    margin: 0;
    font-size: 15px;
    line-height: normal;
    font-weight: 500;
    color: var(--basic-black);
    text-transform: uppercase;
}

.precheck-sample__specs {
    grid-column: 1 / 3;
}

@media (min-width: 768px) {
    .precheck-sample__top {
        grid-template-columns: 219px 1fr;
        column-gap: 20px;
        row-gap: 16px;
    }


    .precheck-sample__specs {
        grid-column: 2 / 3;
    }
}

@media (min-width: 1200px) {
    .precheck-sample {
        margin-bottom: 25px;
    }
}
.sample-specs {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    column-gap: 16px;
    row-gap: 10px;
    margin: 0;
}

.sample-specs__item {
    display: flex;
    flex-direction: column;
    row-gap: 3px;
}

.sample-specs__item dt {
    font-size: 14px;
    line-height: 1.3;
    font-weight: 400;
    color: #888888;
}

.sample-specs__item dd {
    position: relative;
    margin: 0;
    font-size: 14px;
    line-height: 1.3;
    color: var(--basic-black);
}

@keyframes skeleton-loading {
    0% {
        background-color: #f4f4f2;
    }

    100% {
        background-color: #e9e9e9;
    }
}

.sample-specs__item dd.skeleton {
    overflow: hidden;
}

.sample-specs__item dd.skeleton::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 120px;
    height: 19px;
    border-radius: 4px;
    animation: skeleton-loading 1s linear infinite alternate;
}

@media (min-width: 768px) {
    .sample-specs__item {
        row-gap: 5px;
    }
}

@media (min-width: 1200px) {

    .sample-specs__item dt,
    .sample-specs__item dd {
        font-size: 15px;
    }
}
.sample-data {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
}

.sample-data__item {
    display: flex;
    align-items: center;
    column-gap: 10px;
    padding: 12px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.sample-data__item:nth-child(odd) {
    padding-left: 0;
    border-right: 1px solid rgba(0, 0, 0, 0.1);
}

.sample-data__item:nth-child(even) {
    padding-right: 0;
}

.sample-data__item:nth-child(1),
.sample-data__item:nth-child(2) {
    padding-top: 0;
}

.sample-data__item:nth-last-child(1),
.sample-data__item:nth-last-child(2) {
    padding-bottom: 0;
    border-bottom: none;
}

.sample-data__icon {
    flex-shrink: 0;
    width: 22px;
    height: 22px;
    object-fit: cover;
}

.sample-data__caption {
    display: block;
    margin-bottom: 2px;
    font-size: 14px;
    line-height: 1.4;
    color: var(--basic-black);
}

.sample-data__value {
    font-size: 14px;
    line-height: 1.3;
    color: var(--dark-grey);
}

.sample-data__item.fail .sample-data__value {
    color: var(--red);
}

.sample-data__item .blc {
    font-weight: 400;
    color: var(--main-blue);
}

@keyframes skeleton-loading {
    0% {
        background-color: #f4f4f2;
    }

    100% {
        background-color: #e9e9e9;
    }
}

.skeleton {
    display: block;
    width: 120px;
    height: 19px;
    border-radius: 4px;
    animation: skeleton-loading 1s linear infinite alternate;
}

@media (min-width: 1200px) {
    .sample-data__item {
        padding-left: 16px;
        padding-right: 16px;
    }

    .sample-data__icon {
        width: 28px;
        height: 28px;
    }

    .sample-data__caption,
    .sample-data__value {
        font-size: 15px;
    }
}
.VhModule:first-child {
    margin-top: 0
}

.VhModule--small {
    margin-bottom: 2rem;
    margin-top: 2rem
}

.VhModule--medium {
    margin-bottom: 4rem;
    margin-top: 4rem;
    
}

.VhModule--large {
    margin-bottom: 6rem;
    margin-top: 6rem
}

.VhModule--small.VhModule--anchor {
    margin-top: -2rem;
    padding-top: 4rem
}

@media (min-width:768px) {
    .VhModule--small.VhModule--anchor {
        padding-top: 5rem
    }
}

.VhModule--medium.VhModule--anchor {
    margin-top: 0;
    padding-top: 4rem
}

@media (min-width:768px) {
    .VhModule--medium.VhModule--anchor {
        padding-top: 5rem
    }
}

.VhModule--large.VhModule--anchor {
    margin-top: 0;
    padding-top: 4rem
}

@media (min-width:768px) {
    .VhModule--large.VhModule--anchor {
        padding-top: 5rem
    }
}

.VehicleSpecifications-section[data-v-4516f8a6]:not(:last-child) {
    margin-bottom: 2rem
}
@media (min-width:768px) {
    .section-title2 {
        /* border-bottom-width: 1px;
        border-color: var(--color--grey300); */
        border-bottom: 1px solid grey;
        /* border-style: solid; */
        padding-bottom: .25rem;
        margin: 0;
        color: white;
    }
}
 .section-title2.section-title2--forceBorder {
    border-bottom-width: 1px;
    border-color: var(--color--grey300);
    border-style: solid;
    padding-bottom: 0
}

.section-title2+.lead {
    font-size: 1rem;
    /* margin-top: -.5rem */
}

.VehicleSpecifications-section[data-v-4516f8a6]:not(:last-child) {
    margin-bottom: 2rem
}
.EquipmentDetails[data-v-3d705eaa] {
    -webkit-column-gap: 2rem;
    -moz-column-gap: 2rem;
    column-gap: 2rem;
    
}

@media (min-width:0) and (max-width:767px) {
    .EquipmentDetails[data-v-3d705eaa] {
        -webkit-columns: 2;
        -moz-columns: 2;
        column-count: 2
    }
    .VehicleSpecifications-section h3{
        font-size: 1rem;
    }
}

@media (min-width:768px) {
    .EquipmentDetails[data-v-3d705eaa] {
        -webkit-columns: 4;
        -moz-columns: 4;
        column-count: 4
    }
}

.EquipmentDetails-item[data-v-3d705eaa] {
    display: inline-block;
    margin-bottom: 1.5rem
}

.EquipmentDetails-title[data-v-3d705eaa] {
    font-size: 15px;
    padding-bottom: 5px;
}

.EquipmentDetails-value[data-v-3d705eaa] {
    margin-bottom: .5rem;
    font-weight: 700;
    
}
.OriginalEquipmentDetails[data-v-097cda82] {
    -webkit-column-gap: 2rem;
    -moz-column-gap: 2rem;
    column-gap: 2rem
}

@media (min-width:0) and (max-width:767px) {
    .OriginalEquipmentDetails[data-v-097cda82] {
        -webkit-columns: 2;
        -moz-columns: 2;
        column-count: 2
    }
}

@media (min-width:768px) {
    .OriginalEquipmentDetails[data-v-097cda82] {
        -webkit-columns: 4;
        -moz-columns: 4;
        column-count: 4;
    }
}

.OriginalEquipmentDetails-item[data-v-097cda82] {
    display: inline-block;
    margin-bottom: 1.5rem
}

.OriginalEquipmentDetails-title[data-v-097cda82] {
    font-size: .75rem;
}

.OriginalEquipmentDetails-value[data-v-097cda82] {
    margin-bottom: .5rem;
}

.custom-style-div{
    max-width: 1500px;
    margin: 0 auto;
    width: 100%;
    overflow: visible;
}
@media (max-width: 767px){
    .custom-style-div{
        overflow: auto!important;
    }
}

.VinReport-sectionAnchor {
    margin-top: calc(-48px - 1rem);
    padding-top: calc(48px + 1rem)
}
.Table {
    border-collapse: collapse;
    color: var(--text-color);
    width: 100%
}

.Table,
.Table-header {
    font-size: .875rem
}

.Table-header th {
    /* border-bottom-width: 1px;
    border-color: var(--color--grey300);
    border-style: solid; */
    border-bottom: 1px solid grey;
    min-width: 4.5rem;
    padding: 1rem .5rem;
    text-align: center;
}

.Table-body tr:nth-child(2n) {
    background-color: lightcyan;
}

.Table-body td {
    min-width: 4.5rem;
    padding: 1rem .5rem;
}
@media (min-width:768px) {
    .md-up\:order-1 {
        -webkit-box-ordinal-group: 2;
        -moz-box-ordinal-group: 2;
        -webkit-order: 1;
        order: 1
    }

    .md-up\:order-3 {
        -webkit-box-ordinal-group: 4;
        -moz-box-ordinal-group: 4;
        -webkit-order: 3;
        order: 3
    }

    .md-up\:order-2 {
        -webkit-box-ordinal-group: 3;
        -moz-box-ordinal-group: 3;
        -webkit-order: 2;
        order: 2
    }

    .md-up\:my-3 {
        margin-bottom: .75rem;
        margin-top: .75rem
    }

    .md-up\:mx-0 {
        margin-left: 0;
        margin-right: 0
    }

    .md-up\:my-16 {
        margin-bottom: 4rem;
        margin-top: 4rem
    }

    .md-up\:mr-3 {
        margin-right: .75rem
    }

    .md-up\:mr-6 {
        margin-right: 1.5rem
    }

    .md-up\:mb-0 {
        margin-bottom: 0
    }

    .md-up\:mr-4 {
        margin-right: 1rem
    }

    .md-up\:ml-6 {
        margin-left: 1.5rem
    }

    .md-up\:mb-1 {
        margin-bottom: .25rem
    }

    .md-up\:ml-36 {
        margin-left: 9rem
    }

    .md-up\:-mt-3 {
        margin-top: -.75rem
    }

    .md-up\:mb-5 {
        margin-bottom: 1.25rem
    }

    .md-up\:mb-4 {
        margin-bottom: 1rem
    }

    .md-up\:mt-6 {
        margin-top: 1.5rem
    }

    .md-up\:mt-2 {
        margin-top: .5rem
    }

    .md-up\:ml-auto {
        margin-left: auto
    }

    .md-up\:mr-2 {
        margin-right: .5rem
    }

    .md-up\:mb-1\.5 {
        margin-bottom: .375rem
    }

    .md-up\:mr-2\.5 {
        margin-right: .625rem
    }

    .md-up\:mb-12 {
        margin-bottom: 3rem
    }

    .md-up\:mt-\[-76px\] {
        margin-top: -76px
    }

    .md-up\:block {
        display: block
    }

    .md-up\:inline-block {
        display: inline-block
    }

    .md-up\:flex {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: flex
    }

    .md-up\:\!flex {
        display: -webkit-box !important;
        display: -webkit-flex !important;
        display: -moz-box !important;
        display: flex !important
    }

    .md-up\:hidden {
        display: none
    }

    .md-up\:\!hidden {
        display: none !important
    }

    .md-up\:h-7 {
        height: 1.75rem
    }

    .md-up\:h-8 {
        height: 2rem
    }

    .md-up\:h-20 {
        height: 5rem
    }

    .md-up\:h-\[60px\] {
        height: 60px
    }

    .md-up\:h-6 {
        height: 1.5rem
    }

    .md-up\:min-h-\[4rem\] {
        min-height: 4rem
    }

    .md-up\:w-\[120px\] {
        width: 120px
    }

    .md-up\:w-2\/5 {
        width: 40%
    }

    .md-up\:w-3\/5 {
        width: 60%
    }

    .md-up\:w-\[3\.25rem\] {
        width: 3.25rem
    }

    .md-up\:w-\[4\.5rem\] {
        width: 4.5rem
    }

    .md-up\:w-auto {
        width: auto
    }

    .md-up\:w-\[294px\] {
        width: 294px
    }

    .md-up\:w-8 {
        width: 2rem
    }

    .md-up\:w-60 {
        width: 15rem
    }

    .md-up\:w-full {
        width: 100%
    }

    .md-up\:w-1\/2 {
        width: 50%
    }

    .md-up\:w-6 {
        width: 1.5rem
    }

    .md-up\:w-2\/3 {
        width: 66.666667%
    }

    .md-up\:w-\[400px\] {
        width: 400px
    }

    .md-up\:min-w-max {
        min-width: -webkit-max-content;
        min-width: -moz-max-content;
        min-width: max-content
    }

    .md-up\:min-w-\[56px\] {
        min-width: 56px
    }

    .md-up\:min-w-\[65\%\] {
        min-width: 65%
    }

    .md-up\:max-w-\[1092px\] {
        max-width: 1092px
    }

    .md-up\:flex-\[0_1_40\%\] {
        -webkit-box-flex: 0;
        -moz-box-flex: 0;
        -webkit-flex: 0 1 40%;
        flex: 0 1 40%
    }

    .md-up\:flex-\[0_1_60\%\] {
        -webkit-box-flex: 0;
        -moz-box-flex: 0;
        -webkit-flex: 0 1 60%;
        flex: 0 1 60%
    }

    .md-up\:cursor-pointer {
        cursor: pointer
    }

    .md-up\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
    }

    .md-up\:grid-cols-6 {
        grid-template-columns: repeat(6, minmax(0, 1fr))
    }

    .md-up\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr))
    }

    .md-up\:flex-row {
        -webkit-box-orient: horizontal;
        -moz-box-orient: horizontal;
        -webkit-flex-direction: row;
        flex-direction: row
    }

    .md-up\:flex-col,
    .md-up\:flex-row {
        -webkit-box-direction: normal;
        -moz-box-direction: normal
    }

    .md-up\:flex-col {
        -webkit-box-orient: vertical;
        -moz-box-orient: vertical;
        -webkit-flex-direction: column;
        flex-direction: column
    }

    .md-up\:flex-wrap {
        -webkit-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .md-up\:items-start {
        -webkit-box-align: start;
        -moz-box-align: start;
        -webkit-align-items: flex-start;
        align-items: flex-start
    }

    .md-up\:items-center {
        -webkit-box-align: center;
        -moz-box-align: center;
        -webkit-align-items: center;
        align-items: center
    }

    .md-up\:justify-start {
        -webkit-box-pack: start;
        -moz-box-pack: start;
        -webkit-justify-content: flex-start;
        justify-content: flex-start
    }

    .md-up\:justify-center {
        -webkit-box-pack: center;
        -moz-box-pack: center;
        -webkit-justify-content: center;
        justify-content: center
    }

    .md-up\:justify-between {
        -webkit-box-pack: justify;
        -moz-box-pack: justify;
        -webkit-justify-content: space-between;
        justify-content: space-between
    }

    .md-up\:gap-3 {
        gap: .75rem
    }

    .md-up\:gap-x-8 {
        -webkit-column-gap: 2rem;
        -moz-column-gap: 2rem;
        column-gap: 2rem
    }

    .md-up\:gap-x-3 {
        -webkit-column-gap: .75rem;
        -moz-column-gap: .75rem;
        column-gap: .75rem
    }

    .md-up\:self-start {
        -webkit-align-self: flex-start;
        align-self: flex-start
    }

    .md-up\:\!rounded-lg {
        -webkit-border-radius: .5rem !important;
        -moz-border-radius: .5rem !important;
        border-radius: .5rem !important
    }

    .md-up\:rounded-tl-lg {
        -moz-border-radius-topleft: .5rem;
        -webkit-border-top-left-radius: .5rem;
        border-top-left-radius: .5rem
    }

    .md-up\:rounded-tr-none {
        -moz-border-radius-topright: 0;
        -webkit-border-top-right-radius: 0;
        border-top-right-radius: 0
    }

    .md-up\:rounded-br-none {
        -moz-border-radius-bottomright: 0;
        -webkit-border-bottom-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .md-up\:border-r {
        border-right-width: 1px
    }

    .md-up\:border-b-0 {
        border-bottom-width: 0
    }

    .md-up\:border-t {
        border-top-width: 1px
    }

    .md-up\:p-8 {
        padding: 2rem
    }

    .md-up\:px-1 {
        padding-left: .25rem;
        padding-right: .25rem
    }

    .md-up\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .md-up\:px-16 {
        padding-left: 4rem;
        padding-right: 4rem
    }

    .md-up\:py-0 {
        padding-bottom: 0;
        padding-top: 0
    }

    .md-up\:py-16 {
        padding-bottom: 4rem;
        padding-top: 4rem
    }

    .md-up\:py-8 {
        padding-bottom: 2rem;
        padding-top: 2rem
    }

    .md-up\:px-12 {
        padding-left: 3rem;
        padding-right: 3rem
    }

    .md-up\:py-4 {
        padding-bottom: 1rem;
        padding-top: 1rem
    }

    .md-up\:pb-0 {
        padding-bottom: 0
    }

    .md-up\:pt-0 {
        padding-top: 0
    }

    .md-up\:pr-3 {
        padding-right: .75rem
    }

    .md-up\:pb-6 {
        padding-bottom: 1.5rem
    }

    .md-up\:pt-6 {
        padding-top: 1.5rem
    }

    .md-up\:pb-12 {
        padding-bottom: 3rem
    }

    .md-up\:pr-4 {
        padding-right: 1rem
    }

    .md-up\:pl-8 {
        padding-left: 2rem
    }

    .md-up\:pl-6 {
        padding-left: 1.5rem
    }

    .md-up\:pt-\[92px\] {
        padding-top: 92px
    }

    .md-up\:pt-\[76px\] {
        padding-top: 76px
    }

    .md-up\:text-left {
        text-align: left
    }

    .md-up\:text-7xl {
        font-size: 2.625rem
    }

    .md-up\:text-sm {
        font-size: .875rem
    }

    .md-up\:text-6xl {
        font-size: 2rem
    }

    .md-up\:text-base {
        font-size: 1rem
    }

    .md-up\:text-xl {
        font-size: 1.25rem
    }

    .md-up\:text-lg {
        font-size: 1.125rem
    }

    .md-up\:text-2xl {
        font-size: 1.375rem
    }

    .md-up\:text-4xl {
        font-size: 1.625rem
    }

    .md-up\:leading-relaxed {
        line-height: 1.625
    }

    .md-up\:leading-\[1\.75rem\] {
        line-height: 1.75rem
    }

    .md-up\:text-sm-bold {
        font-size: .875rem;
        font-weight: 700;
        line-height: 1.375
    }

    .md-up\:line-clamp-1 {
        -webkit-box-orient: vertical;
        /* -webkit-line-clamp: 1; */
        display: -webkit-box;
        overflow: hidden;
    }
}
.ll-at-background{
    background-color: #25667F;
    padding: 20px 10px;
}
.bodydiv{
    border: 2px solid black;
    width: 80%;
    max-width: 1500px;
    margin: 20px auto;
    padding: 40px;
    border-radius: 20px;
}
.con{
    border: 1px solid black;
    margin-bottom: 20px;
    border-radius: 10px;
}
p{
    margin-left: 10px;
}
.tooltip-container {
    position: relative;
    display: inline-block;
}

.tooltip-text {
    visibility: hidden;
    width: 450px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 10px;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -75px;
    opacity: 0;
    transition: opacity 0.3s;
    overflow: visible;
}

.tooltip-container:hover .tooltip-text {
    visibility: visible;
    opacity: 1;
    overflow: visible;
}


    
.custom-style-div2{
    max-width: 1500px;
    margin: 0 auto;
    width: 100%;
    
}
@media screen and (min-width: 1200px) {
            .css-t2i27g>li~li {
                margin-top: 24px;
            }
        }
         .css-f8uefx {
            margin-bottom: 24px;
        }

        @media screen and (min-width: 1200px) {
            .css-f8uefx {
                margin-bottom: 0;
            }
        }
        .css-1cdh1tv {
            color: #FFFFFF;
            cursor: pointer;
            font-size: inherit;
            line-height: inherit;
            font-weight: inherit;
        }

        .css-1cdh1tv:hover {
            -webkit-text-decoration: underline;
            text-decoration: underline;
        }

        .css-1cdh1tv button {
            color: #FFFFFF !important;
            cursor: pointer !important;
            font-size: inherit !important;
            line-height: inherit !important;
            font-weight: inherit;
            padding: 0 !important;
            background: none !important;
            border: none !important;
        }

    .slick-prev:hover,
    .slick-prev:focus,
    .slick-next:hover,
    .slick-next:focus {
      color: transparent;
      outline: none
    }
    .slick-prev:hover:before,
    .slick-prev:focus:before,
    .slick-next:hover:before,
    .slick-next:focus:before {
      opacity: 1
    }

    .slick-prev.slick-disabled:before,
    .slick-next.slick-disabled:before {
      opacity: .25
    }

    .slick-prev:before,
    .slick-next:before {
      font-family: 'slick';
      font-size: 20px;
      line-height: 1;
      opacity: .8;
      color: white;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .slick-prev {
      left: 0px
    }

    [dir='rtl'] .slick-prev {
      right: 0px;
      left: auto
    }

    .slick-prev:before {
      content: url(../../../images/triangle-l.svg)
    }

    [dir='rtl'] .slick-prev:before {
      content: url(../../../images/triangle-r.svg)
    }

    .slick-next {
      right: 0px
    }

    [dir='rtl'] .slick-next {
      right: auto;
      left: 0px
    }

    .slick-next:before {
      content: url(../../../images/triangle-r.svg)
    }

    [dir='rtl'] .slick-next:before {
      content: url(../../../images/triangle-l.svg)
    }

    /* Dots */
    .slick-dotted.slick-slider {
      margin-bottom: 30px
    }

    .slick-dots {
      position: absolute;
      bottom: -25px;
      display: block;
      width: 100%;
      padding: 0;
      margin: 0;
      list-style: none;
      text-align: center
    }

    .slick-dots li {
      position: relative;
      display: inline-block;
      width: 20px;
      height: 20px;
      margin: 0 5px;
      padding: 0;
      cursor: pointer
    }

    .slick-dots li button {
      font-size: 11px;
      line-height: 0;
      display: block;
      width: 20px;
      height: 20px;
      padding: 5px;
      cursor: pointer;
      border: 0;
      border-radius: 50%;
      outline: none;
      color: #fff;
      background: #bbb
    }

    .slick-dots li.slick-active button,
    .slick-dots li button:hover,
    .slick-dots li button:focus {
      outline: none
    }

    /*!
 * Viewer.js v1.10.3
 * https://fengyuanchen.github.io/viewerjs
 *
 * Copyright 2015-present Chen Fengyuan
 * Released under the MIT license
 *
 * Date: 2022-02-02T05:14:59.271Z
 */

    .viewer-zoom-in::before,
    .viewer-zoom-out::before,
    .viewer-one-to-one::before,
    .viewer-reset::before,
    .viewer-prev::before,
    .viewer-play::before,
    .viewer-next::before,
    .viewer-rotate-left::before,
    .viewer-rotate-right::before,
    .viewer-flip-horizontal::before,
    .viewer-flip-vertical::before,
    .viewer-fullscreen::before,
    .viewer-fullscreen-exit::before,
    .viewer-close::before {
      background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARgAAAAUCAYAAABWOyJDAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABx0RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNui8sowAAAQPSURBVHic7Zs/iFxVFMa/0U2UaJGksUgnIVhYxVhpjDbZCBmLdAYECxsRFBTUamcXUiSNncgKQbSxsxH8gzAP3FU2jY0kKKJNiiiIghFlccnP4p3nPCdv3p9778vsLOcHB2bfveeb7955c3jvvNkBIMdxnD64a94GHMfZu3iBcRynN7zAOI7TG15gHCeeNUkr8zaxG2lbYDYsdgMbktBsP03jdQwljSXdtBhLOmtjowC9Mg9L+knSlcD8TNKpSA9lBpK2JF2VdDSR5n5J64m0qli399hNFMUlpshQii5jbXTbHGviB0nLNeNDSd9VO4A2UdB2fp+x0eCnaXxWXGA2X0au/3HgN9P4LFCjIANOJdrLr0zzZ+BEpNYDwKbpnQMeAw4m8HjQtM6Z9qa917zPQwFr3M5KgA6J5rTJCdFZJj9/lyvGhsDvwFNVuV2MhhjrK6b9bFiE+j1r87eBl4HDwCF7/U/k+ofAX5b/EXBv5JoLMuILzf3Ap6Z3EzgdqHMCuF7hcQf4HDgeoHnccncqdK/TvSDWffFXI/exICY/xZyqc6XLWF1UFZna4gJ7q8BsRvgd2/xXpo6P+D9dfT7PpECtA3cnWPM0GXGFZh/wgWltA+cDNC7X+AP4GzjZQe+k5dRxuYPeiuXU7e1qwLpDz7dFjXKRaSwuMLvAlG8zZlG+YmiK1HoFqT7wP2z+4Q45TfEGcMt01xLoNZEBTwRqD4BLpnMLeC1A41UmVxsXgXeBayV/Wx20rpTyrpnWRft7p6O/FdqzGrDukPNtkaMoMo3FBdBSQMOnYBCReyf05s126fU9ytfX98+mY54Kxnp7S9K3kj6U9KYdG0h6UdLbkh7poFXMfUnSOyVvL0h6VtIXHbS6nOP+s/Zm9mvyXW1uuC9ohZ72E9uDmXWLJOB1GxsH+DxPftsB8B6wlGDN02TAkxG6+4D3TWsbeC5CS8CDFce+AW500LhhOW2020TRjK3b21HEmgti9m0RonxbdMZeVzV+/4tF3cBpP7E9mKHNL5q8h5g0eYsCMQz0epq8gQrwMXAgcs0FGXGFRcB9wCemF9PkbYqM/Bas7fxLwNeJPdTdpo4itQti8lPMqTpXuozVRVXPpbHI3KkNTB1NfkL81j2mvhDp91HgV9MKuRIqrykj3WPq4rHyL+axj8/qGPmTqi6F9YDlHOvJU6oYcTsh/TYSzWmTE6JT19CtLTJt32D6CmHe0eQn1O8z5AXgT4sx4Vcu0/EQecMydB8z0hUWkTd2t4CrwNEePqMBcAR4mrBbwyXLPWJa8zrXmmLEhNBmfpkuY2102xxrih+pb+ieAb6vGhuA97UcJ5KR8gZ77K+99xxeYBzH6Q3/Z0fHcXrDC4zjOL3hBcZxnN74F+zlvXFWXF9PAAAAAElFTkSuQmCC");
      background-repeat: no-repeat;
      background-size: 280px;
      color: transparent;
      display: block;
      font-size: 0;
      height: 20px;
      line-height: 0;
      width: 20px;
    }

    .viewer-zoom-in::before {
      background-position: 0 0;
      content: "Zoom In";
    }

    .viewer-zoom-out::before {
      background-position: -20px 0;
      content: "Zoom Out";
    }

    .viewer-one-to-one::before {
      background-position: -40px 0;
      content: "One to One";
    }

    .viewer-reset::before {
      background-position: -60px 0;
      content: "Reset";
    }

    .viewer-prev::before {
      background-position: -80px 0;
      content: "Previous";
    }

    .viewer-play::before {
      background-position: -100px 0;
      content: "Play";
    }

    .viewer-next::before {
      background-position: -120px 0;
      content: "Next";
    }

    .viewer-rotate-left::before {
      background-position: -140px 0;
      content: "Rotate Left";
    }

    .viewer-rotate-right::before {
      background-position: -160px 0;
      content: "Rotate Right";
    }

    .viewer-flip-horizontal::before {
      background-position: -180px 0;
      content: "Flip Horizontal";
    }

    .viewer-flip-vertical::before {
      background-position: -200px 0;
      content: "Flip Vertical";
    }

    .viewer-fullscreen::before {
      background-position: -220px 0;
      content: "Enter Full Screen";
    }

    .viewer-fullscreen-exit::before {
      background-position: -240px 0;
      content: "Exit Full Screen";
    }

    .viewer-close::before {
      background-position: -260px 0;
      content: "Close";
    }

    .viewer-container {
      bottom: 0;
      direction: ltr;
      font-size: 0;
      left: 0;
      line-height: 0;
      overflow: hidden;
      position: absolute;
      right: 0;
      -webkit-tap-highlight-color: transparent;
      top: 0;
      touch-action: none;
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
    }

    .viewer-container::-moz-selection,
    .viewer-container *::-moz-selection {
      background-color: transparent;
    }

    .viewer-container::selection,
    .viewer-container *::selection {
      background-color: transparent;
    }

    .viewer-container:focus {
      outline: 0;
    }

    .viewer-container img {
      display: block;
      height: auto;
      max-height: none !important;
      max-width: none !important;
      min-height: 0 !important;
      min-width: 0 !important;
      width: 100%;
    }

    .viewer-canvas {
      bottom: 0;
      left: 0;
      overflow: hidden;
      position: absolute;
      right: 0;
      top: 0
    }

    .viewer-canvas>img {
      height: auto;
      margin: 15px auto;
      max-width: 90% !important;
      width: auto;
    }

    .viewer-footer {
      bottom: 0;
      left: 0;
      overflow: hidden;
      position: absolute;
      right: 0;
      text-align: center;
    }

    .viewer-navbar {
      background-color: rgb(0 0 0 / 50%);
      overflow: hidden;
    }

    .viewer-list {
      box-sizing: content-box;
      height: 50px;
      margin: 0;
      overflow: hidden;
      padding: 1px 0
    }

    .viewer-list>li {
      color: transparent;
      cursor: pointer;
      float: left;
      font-size: 0;
      height: 50px;
      line-height: 0;
      opacity: 0.5;
      overflow: hidden;
      transition: opacity 0.15s;
      width: 30px
    }

    .viewer-list>li:focus,
    .viewer-list>li:hover {
      opacity: 0.75;
    }

    .viewer-list>li:focus {
      outline: 0;
    }

    .viewer-list>li+li {
      margin-left: 1px;
    }

    .viewer-list>.viewer-loading {
      position: relative
    }

    .viewer-list>.viewer-loading::after {
      border-width: 2px;
      height: 20px;
      margin-left: -10px;
      margin-top: -10px;
      width: 20px;
    }

    .viewer-list>.viewer-active,
    .viewer-list>.viewer-active:focus,
    .viewer-list>.viewer-active:hover {
      opacity: 1;
    }

    .viewer-player {
      background-color: #000;
      bottom: 0;
      cursor: none;
      display: none;
      left: 0;
      position: absolute;
      right: 0;
      top: 0;
      z-index: 1
    }

    .viewer-player>img {
      left: 0;
      position: absolute;
      top: 0;
    }

    .viewer-toolbar>ul {
      display: inline-block;
      margin: 0 auto 5px;
      overflow: hidden;
      padding: 6px 3px
    }

    .viewer-toolbar>ul>li {
      background-color: rgb(0 0 0 / 50%);
      border-radius: 50%;
      cursor: pointer;
      float: left;
      height: 24px;
      overflow: hidden;
      transition: background-color 0.15s;
      width: 24px
    }

    .viewer-toolbar>ul>li:focus,
    .viewer-toolbar>ul>li:hover {
      background-color: rgb(0 0 0 / 80%);
    }

    .viewer-toolbar>ul>li:focus {
      box-shadow: 0 0 3px #fff;
      outline: 0;
      position: relative;
      z-index: 1;
    }

    .viewer-toolbar>ul>li::before {
      margin: 2px;
    }

    .viewer-toolbar>ul>li+li {
      margin-left: 1px;
    }

    .viewer-toolbar>ul>.viewer-small {
      height: 18px;
      margin-bottom: 3px;
      margin-top: 3px;
      width: 18px
    }

    .viewer-toolbar>ul>.viewer-small::before {
      margin: -1px;
    }

    .viewer-toolbar>ul>.viewer-large {
      height: 30px;
      margin-bottom: -3px;
      margin-top: -3px;
      width: 30px
    }

    .viewer-toolbar>ul>.viewer-large::before {
      margin: 5px;
    }

    .viewer-tooltip {
      background-color: rgb(0 0 0 / 80%);
      border-radius: 10px;
      color: #fff;
      display: none;
      font-size: 12px;
      height: 20px;
      left: 50%;
      line-height: 20px;
      margin-left: -25px;
      margin-top: -10px;
      position: absolute;
      text-align: center;
      top: 50%;
      width: 50px;
    }

    .viewer-title {
      color: #ccc;
      display: inline-block;
      font-size: 12px;
      line-height: 1.2;
      margin: 0 5% 5px;
      max-width: 90%;
      opacity: 0.8;
      overflow: hidden;
      text-overflow: ellipsis;
      transition: opacity 0.15s;
      white-space: nowrap
    }

    .viewer-title:hover {
      opacity: 1;
    }

    .viewer-button {
      background-color: rgb(0 0 0 / 50%);
      border-radius: 50%;
      cursor: pointer;
      height: 80px;
      overflow: hidden;
      position: absolute;
      right: -40px;
      top: -40px;
      transition: background-color 0.15s;
      width: 80px
    }

    .viewer-button:focus,
    .viewer-button:hover {
      background-color: rgb(0 0 0 / 80%);
    }

    .viewer-button:focus {
      box-shadow: 0 0 3px #fff;
      outline: 0;
    }

    .viewer-button::before {
      bottom: 15px;
      left: 15px;
      position: absolute;
    }

    .viewer-fixed {
      position: fixed;
    }

    .viewer-open {
      overflow: hidden;
    }

    .viewer-show {
      display: block;
    }

    .viewer-hide {
      display: none;
    }

    .viewer-backdrop {
      background-color: rgb(0 0 0 / 50%);
    }

    .viewer-invisible {
      visibility: hidden;
    }

    .viewer-move {
      cursor: move;
      cursor: -webkit-grab;
      cursor: grab;
    }

    .viewer-fade {
      opacity: 0;
    }

    .viewer-in {
      opacity: 1;
    }

    .viewer-transition {
      transition: all 0.3s;
    }

    @-webkit-keyframes viewer-spinner {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    @keyframes viewer-spinner {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    .viewer-loading::after {
      -webkit-animation: viewer-spinner 1s linear infinite;
      animation: viewer-spinner 1s linear infinite;
      border: 4px solid rgb(255 255 255 / 10%);
      border-left-color: rgb(255 255 255 / 50%);
      border-radius: 50%;
      content: "";
      display: inline-block;
      height: 40px;
      left: 50%;
      margin-left: -20px;
      margin-top: -20px;
      position: absolute;
      top: 50%;
      width: 40px;
      z-index: 1;
    }

    @media (max-width: 767px) {
      .viewer-hide-xs-down {
        display: none;
      }
    }

    @media (max-width: 991px) {
      .viewer-hide-sm-down {
        display: none;
      }
    }

    @media (max-width: 1199px) {
      .viewer-hide-md-down {
        display: none;
      }
    }

    /* Slider */
    .slick-slider {
      position: relative;

      display: block;
      box-sizing: border-box;

      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;

      -webkit-touch-callout: none;
      -khtml-user-select: none;
      -ms-touch-action: pan-y;
      touch-action: pan-y;
      -webkit-tap-highlight-color: transparent;
    }

    .slick-list {
      position: relative;

      display: block;
      overflow: hidden;

      margin: 0;
      padding: 0;
    }

    .slick-list:focus {
      outline: none;
    }

    .slick-list.dragging {
      cursor: pointer;
      cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list {
      -webkit-transform: translate3d(0, 0, 0);
      -moz-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      -o-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    .slick-track {
      position: relative;
      top: 0;
      left: 0;

      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .slick-track:before,
    .slick-track:after {
      display: table;

      content: '';
    }

    .slick-track:after {
      clear: both;
    }

    .slick-loading .slick-track {
      visibility: hidden;
    }

    .slick-slide {
      display: none;
      float: left;

      height: 100%;
      min-height: 1px;
    }

    [dir='rtl'] .slick-slide {
      float: right;
    }

    .slick-slide img {
      display: block;
    }

    .slick-slide.slick-loading img {
      display: none;
    }

    .slick-slide.dragging img {
      pointer-events: none;
    }

    .slick-initialized .slick-slide {
      display: block;
    }

    .slick-loading .slick-slide {
      visibility: hidden;
    }

    .slick-vertical .slick-slide {
      display: block;

      height: auto;

      border: 1px solid transparent;
    }

    .slick-arrow.slick-hidden {
      display: none;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: auto;
      margin: 0;
      /*background-color: #f0f0f0;*/
    }
    
    .search-container {
      margin-top: 120px;
      text-align: center;
      /* display: flex; */
      justify-content: center;
      align-items: center;
      background-color: #fff;
      width: 50%;
      padding: 20px;
      padding-top: 60px;
      border-radius: 8px;
      
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding-bottom: 60px;
    }

    .search-container input[type="text"] {
      padding: 10px;
      width: 78%;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      margin-right: 10px;
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    #trim {
      padding: 10px 20px;
      /* background-color: #4CAF50; */
      /* color: white; */
      /* border: none; */
      border-radius: 4px;
      cursor: pointer;
      margin-right: 20px;
      font-size: 16px;
    }

    button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    /* Responsive adjustments */
    @media (max-width: 600px) {
      .css-12j6hiz a img{
        width: 70px;
      }
      .navbar{
        flex-wrap: nowrap;
      }
      .search-container {
        width: 90%;
        max-width: 400px;
      }

      .search-container input[type="text"],
      button {
        width: 100%;
        margin: 5px 0;
      }
    }

    .report-card-wrap {
      background: white;
      border: 0.5px solid rgba(0, 0, 0, 0.2);
      padding: 20px 18px;
      align-items: flex-start;
    }

    .report-card-body {
      display: flex;
      min-height: 350px;
    }

    .report-card-b-left {
      padding: 10px 20px;
      width: 40%;
      border: 0.5px solid rgba(0, 0, 0, 0.2);
      position: relative;
    }

    .report-card-b-right {
      width: 60%;
    }

    .report-card-table-td {
      border: 0.5px solid rgba(0, 0, 0, 0.2);
    }

    .td-l-sm {
      width: 20%;
    }

    .report-card-table-tr {
      background: white !important;
    }

    .r-c-img {
      margin: 10px 0;
    }
  </style>
  <style>
    .string {
      color: maroon;
    }

    .number {
      color: black;
    }

    .boolean,
    .null {
      color: blue;
    }

    .key {
      color: teal;
    }

    @media (max-width: 2000px) {
      .va_mv_wrapper {
        width: 500px !important;
      }

      #va_mv_canvas {
        width: 500px !important;
        height: 250px !important;
        left: 0 !important;
      }

      #va_mv_graph {
        height: 301px !important;
      }

      #va_mv_statement {
        bottom: 0px !important;
        width: 70%;
      }

      #va_mv_overlay {
        top: 10% !important;
        left: 2% !important;
      }

      #va_mv_leftlabel {

        left: 3%;
        right: auto !important;
        top: 109px !important;
      }

      #va_mv_rightlabel {
        right: 0%;
        left: auto !important;
        top: 109px !important;
      }

    }

    #loading,
    #loading1 {
      display: inline-block;
      width: 50px;
      z-index: 300;
      height: 50px;
      border: 3px solid rgba(0, 0, 255, .3);
      border-radius: 50%;
      border-top-color: blue;
      animation: spin 1s ease-in-out infinite;
      -webkit-animation: spin 1s ease-in-out infinite;
    }

    @keyframes spin {
      to {
        -webkit-transform: rotate(360deg);
      }
    }

    @-webkit-keyframes spin {
      to {
        -webkit-transform: rotate(360deg);
      }
    }

    #va_mv_title_text {
      display: none;
    }

    @media (max-width: 1500px) {
      .va_mv_wrapper {
        width: 300px !important;
      }

      #va_mv_canvas {
        width: 300px !important;
        height: 150px !important;
        left: 0 !important;
      }

      #va_mv_graph {
        height: 249px !important;
      }

      #va_mv_statement {
        bottom: 0px !important;
        width: 100%;
      }

      #va_mv_overlay {
        top: 20% !important;
        left: 0 !important;
      }

      #va_mv_leftlabel {

        top: 45% !important;
        left: -15%;
        right: auto !important;
      }

      #va_mv_rightlabel {
        top: 45% !important;
        right: -15%;
        left: auto !important;
      }

      #va_mv_title_text {
        display: none;
      }
    }

    .btn-graph {
      display: flex;
      height: 50px;
      background-color: #308AC2;
      color: white !important;
      border: 2px solid #308AC2;
      justify-content: center;
      align-items: center;
      align-self: center;
      transition: 0.3s;
      padding: 0 5px;
    }

    .btn-graph:hover {
      border: 2px solid #0056b3;

    }
  </style>

  <style>
    .bold-text-table {
      font-weight: 700;
    }

    .main-wrap-vntb-ld {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .wrap-vntb-ld {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 60%;
      flex-direction: column;
      border: 1px solid black;
      border-radius: 10px;
      overflow: hidden;
    }

    .wrap-vntb-head-dl {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: -webkit-linear-gradient(-45deg, #308AC2 1%, #7ccbfc 99%);
      width: 100%;
      padding: 15px 18px;
      color: white;
    }

    .vntb-tble-wrap {
      display: flex;
      margin: 25px 0;
      width: 90%;
      border-radius: 10px;
      overflow: hidden;
      flex-direction: column;
      border: 1px solid black;
    }

    .vntb-tble-wrp-head {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: -webkit-linear-gradient(-45deg, #308AC2 1%, #225E70 99%);
      width: 100%;
      padding: 15px 18px 0 18px;
      color: white;
    }

    .main-wrap-vntb-ld td {
      padding: 0 !important;
      text-align: center !important;
    }
    .container1 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 70vh;
    /* max-width: 600px; Adjust the maximum width as needed */
}

  </style>

</head>

<body>
@if(session('message'))
<script>
        Swal.fire({
            title: 'No Plan',
            text: "{{ session('message') }}",
            icon: 'error',
            confirmButtonText: 'Ok',
            timer: 3000
        });
</script>
@endif
@if ($dayremaining < 0)
<script>
        Swal.fire({
            title: 'Expired',
            text: "Your Plan Is Expired",
            icon: 'error',
            confirmButtonText: 'Ok',
            timer: 3000
        });
</script>    
@endif
    
<div class="header">
  @include('component.dash_nav')
</div>
  <div class="container1"  >
    <div class="search-container">
      <label for="">Enter You VIN</label>
      <input type="text" placeholder="Search..." maxlength="17" name="vin" style="text-transform: uppercase;">
      {{-- <input name="userId" type="text" value="{{Auth::user()->id}}" style="display: none;" > --}}
    @if ($dayremaining < 0  && $dayremaining !== null)
    <a href="/">
        <button type="button" style="margin-top: 10px;" class="btn btn-dark btn-block px-0" >Your Plan Is Expired</button>
        </a>
        
    @elseif ($dayremaining > 0)
        @if ($remrep > 0)
        <button type="button" style="margin-top: 10px;" class="btn btn-dark btn-block px-0" data-toggle="modal"
        data-target="#historyreport" id="historyreportbtn">Vehicle Full History Report</button>
        @else
        <a href="/">
        <button type="button" style="margin-top: 10px;" class="btn btn-dark btn-block px-0" >Reports Left: {{$remrep}}</button>
        </a>
        @endif
            
      
    @endif
    
      
    </div>
    
  </div>

  <div class="main-container" >
    <div class="">
      <div class="min-height-200px" style="margin: 20px;">
        <div class="card-box mb-30" style="padding: 20px;">
          
          <div class="pb-20">
            <h3style=" margin-bottom:30px;">Your Reports</h3>
						<table class="data-table table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">User Name</th>
									{{-- <th>Report Number</th> --}}
									<th>Vin Number</th>
									
									<th>Gernerate Date</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
                @foreach ($reports as $report)
                    
                <tr>
                  <td class="table-plus">{{Auth::user()->name}}</td>
									{{-- <td>{{$report->report_id}}</td> --}}
									<td>{{$report->vin}}</td>
									<td>{{ $report->created_at->format('d/m/Y') }}</td>
									<td>
                    <div class="dropdown">
                      
                        <a class=" clickable-link" data-toggle="modal"
                        data-target="#historyreport" id="historyreportbtn" data-id="{{$report->id}}"><i class="dw dw-eye"></i> View Report</a>
											</div>
										</div>
									</td>
								</tr>
                @endforeach
                
                
								
								
							</tbody>
						</table>
					</div>
				</div>
				
				
	</div>
  <!-- Modal -->
  <div class="modal fade" id="historyreport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
">
      <div class="modal-content" style="width: 100vw;">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Vehicle History Report</h1>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><i style="font-size:24px"
              class="fa">&#xf00d;</i></button>
        </div>
        <div class="modal-body" id="modeldata">

          <a id="printhistory-report" style="
    background: -webkit-linear-gradient(-45deg,#308AC2 1%,#225E70 99%);
    padding: 10px 20px;
    color: white;
    position: fixed;
    border-radius: 5px;
    cursor: pointer;
">Print Report</a>
          <div role="status" id="spin-load-1" style="position: absolute; left: 37%;"></div>
          <div class="main-wrap-vntb-ld" id="print-div">
          <div class="bodydiv">
            <div id="app" class="driving-checkout en">
    
    
                <main>
                    <div id="precheck">
                        <div class="container holder driving-checkout__holder">
    
                            <div class="driving-checkout__row">
                                <div class="driving-checkout__content">
                                    <div class="driving-checkout__head">
                                          
                                        <p class="driving-checkout__text">Here is the history <span
                                                class="accent js-scroll-payment">record for</span> your vehicle:</p>
                                    </div>
                                    <section class="precheck-sample" aria-labelledby="sampleVehicle">
                                        <div class="precheck-sample__top">
    
                                            <div>
                                                <h2 id="rp-ymkt" class="precheck-sample__title">
                                                </h2>
                                                <p class="precheck-sample__vin" id="rp-vin">VIN: </p>
                                            </div>
                                            <dl class="precheck-sample__specs sample-specs">
                                                <div class="sample-specs__item">
                                                    <dt>Country</dt>
                                                    <dd id="madein-val-tbl"></dd>
                                                </div>
                                                <div class="sample-specs__item">
                                                    <dt>Engine:</dt>
                                                    <dd style="white-space: nowrap; text-overflow: ellipsis; max-width: 120px; overflow: hidden;"
                                                        id="engine-val-tbl">
                                                        </dd>
                                                </div>
                                                <div class="sample-specs__item">
                                                    <dt>HighWay Mileage:</dt>
                                                    <dd id="hgmileage-val-tbl" class=""></dd>
                                                </div>
                                                <div class="sample-specs__item">
                                                    <dt>Invoice Price:</dt>
                                                    <dd id="invoiceprice-val-tbl" class=""></dd>
                                                </div>
                                            </dl>
    
                                        </div>
                                        <div id="summary-table" class="sample-data js-scroll-payment">
                                            <div class="summary-section-0 sample-data__item">
                                                <img class="sample-data__icon" src="/img/vehicle-owner-icon.svg"
                                                    alt="Previous Sales icon">
                                                <div>
                                                    <span class="sample-data__caption">Owners</span>
                                                    <span class="sample-data__value" id="ownerfound"></span>
                                                </div>
                                            </div>
                                            <div class="summary-section-2 sample-data__item fail">
                                                <img class="sample-data__icon" src="/img/vehicle-safety-icon.svg"
                                                    alt="Accidents icon">
                                                <div>
                                                    <span class="sample-data__caption">Auction sales</span>
                                                    <span class="sample-data__value" id="style-val-tbl">Auction: No</span>
                                                </div>
                                            </div>
                                            <div class="summary-section-1 sample-data__item">
                                                <img class="sample-data__icon" src="/img/vehicle-accident-icon.svg"
                                                    alt="Previous Sales icon">
                                                <div>
                                                    <span class="sample-data__caption">Accidents</span>
                                                    <span class="sample-data__value" id="accifound"></span>
                                                </div>
                                            </div>
                                            <div class="summary-section-3 sample-data__item">
                                                <img class="sample-data__icon" src="/img/vehicle-mileage-icon.svg"
                                                    alt="Last mileage icon">
                                                <div>
                                                    <span class="sample-data__caption">City Mileage</span>
                                                    <span class="sample-data__value" id="citymileage-val-tbl"></span>
                                                </div>
                                            </div>
                                            <div class="summary-section-4 sample-data__item fail">
                                                <img class="sample-data__icon" src="/img/vehicle-safety-icon.svg"
                                                    alt="Safety Recalls icon">
                                                <div>
                                                    <span class="sample-data__caption">Year</span>
                                                    <span class="sample-data__value" id="year-val-tbl"></span>
                                                </div>
                                            </div>
                                            <div class="summary-section-5 sample-data__item">
                                                <img class="sample-data__icon" src="/img/vehicle-sales-icon.svg"
                                                    alt="Owners icon">
                                                <div>
                                                    <span class="sample-data__caption">Fuel Capacity</span>
                                                    <span class="sample-data__value" id="fuelcapacity-val-tbl"></span>
                                                </div>
                                            </div>
                                        </div>
    
                                    </section>
                                </div>
                                <div class="driving-checkout__content">
    
                                    <section class="precheck-sample" aria-labelledby="sampleVehicle">
                                        <div class="precheck-sample__top" style="display: flex; flex-direction: column;">
                                            <img id="img-sample" class="precheck-sample__img" src="img/logo.png"
                                                alt="2010 DODGE Grand Caravan 2d4rn3d15ar440271 image"
                                                title="2010 DODGE Grand Caravan 2d4rn3d15ar440271 image">
                                                <h4>Powered By</h4>
                                            <img id="img-sample" class="precheck-sample__img" src="img/idU11CHU_F.png"
                                                alt="2010 DODGE Grand Caravan 2d4rn3d15ar440271 image"
                                                title="2010 DODGE Grand Caravan 2d4rn3d15ar440271 image">
                                            <!-- <img id="img-sample" class="precheck-sample__img" src="img/l1.png"
                                                alt="2010 DODGE Grand Caravan 2d4rn3d15ar440271 image"
                                                title="2010 DODGE Grand Caravan 2d4rn3d15ar440271 image"
                                                style="object-fit: contain;"> -->
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div data-v-4516f8a6="" class="VhModule VehicleSpecifications VhModule--medium custom-style-div2">
                <h2 data-v-4516f8a6="" class="section-title2" style="color: black; padding: 10px 0;">
                    Vehicle Specifications
                </h2>
                <div data-v-4516f8a6="" class="VehicleSpecifications-section">
                    <h3 data-v-4516f8a6="" style="padding: 10px 0;">Specifications</h3>
                    <div data-v-3d705eaa="" data-v-4516f8a6="" class="EquipmentDetails">
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    VIN
                                    <div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text">A VIN is a unique 17-character code identifying a vehicle's manufacturer, model, and year.</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="vin-val-tbl">
                                    
                                </div>
                            </div>
                        </div>
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    Make
                                    <div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text">The make of a car refers to the manufacturer or brand of the vehicle.</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="make-val-tbl">
                                    
                                </div>
                            </div>
                        </div>
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    Trim<div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text">The trim of a car refers to a specific version of a model, offering different features, options, or equipment levels.</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="trim-val-tbl">
                                   
                                </div>
                            </div>
                        </div>
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    Made In<div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text"> The country where a car or its components were manufactured or assembled.</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="madein-val-tbl2">
                                    
                                </div>
                            </div>
                        </div>
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    Steering Type<div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text">The mechanism used to control the direction of a car, such as "power steering.</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="steertype-val-tbl">
                                    
                                </div>
                            </div>
                        </div>
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    Fuel Type<div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text">The kind of energy a vehicle uses for propulsion.</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="fueltype-val-tbl">
                                    
                                </div>
                            </div>
                        </div>
    
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    Gross Weight<div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text">Gross weight refers to the total weight of a vehicle.</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="gweight-val-tbl">
                                    
                                </div>
                            </div>
                        </div>
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    Overall Length<div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text">Overall length refers to the total length of a vehicle from its front to its rear.</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="olength-val-tbl">
                                    
                                </div>
                            </div>
                        </div>
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    Standard Seating<div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text">The number of seats typically provided in a vehicle's base configuration, without additional options or upgrades.</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="standardseating-val-tbl">
                                    
                                </div>
                            </div>
                        </div>
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    Highway Mileage<div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text">Highway mileage refers to the fuel efficiency of a vehicle when driving on highways, usually measured in miles per gallon (MPG) or liters per 100 kilometers (L/100 km).</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="hgmileage-val-tbl2">
                                    
                                </div>
                            </div>
                        </div>
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    Invoice Price<div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text">Invoice price is the amount a dealer pays the manufacturer for a vehicle, which can differ from the retail price.</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="invoiceprice-val-tbl2">
                                    
                                </div>
                            </div>
                        </div>
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    Year<div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text">The model year of the vehicle, indicating when it was designed and released.</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="year-val-tbl2"></div>
                            </div>
                        </div>
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    Model<div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text">The model refers to the specific version or variant of a vehicle within a manufacturer’s lineup.</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="model-val-tbl">
                                </div>
                            </div>
                        </div>
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    Engine<div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text">The engine refers to the vehicle's power unit, which can be described by its type.</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="engine-val-tbl2"></div>
                            </div>
                        </div>
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    Style<div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text">Style refers to the vehicle's body type or design.</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="style-val-tbl2">
                                </div>
                            </div>
                        </div>
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    Anti-Brake System<div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text">Anti-lock Braking System (ABS) is a safety feature that prevents the wheels from locking up during hard braking.</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="abs-val-tbl">
                                </div>
                            </div>
                        </div>
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    Fuel Capacity<div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text">Fuel capacity refers to the maximum amount of fuel a vehicle's tank can hold, usually measured in gallons or liters.</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="fuelcapacity-val-tbl2">
                                </div>
                            </div>
                        </div>
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    Overall Height<div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text">Overall height refers to the total vertical distance from the ground to the highest point of a vehicle.</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="oheight-val-tbl">
                                </div>
                            </div>
                        </div>
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    Overall Width<div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text">Overall width refers to the total horizontal distance from one side of a vehicle to the other, excluding mirrors.</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="owidth-val-tbl">
                                    
                                </div>
                            </div>
                        </div>
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    Optional Seating<div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text">Optional seating refers to extra or upgraded seating configurations available for a vehicle.</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="optionalseating-val-tbl">
                                    
                                </div>
                            </div>
                        </div>
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    City Mileage<div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text">City mileage is the fuel efficiency in urban driving, measured in MPG or L/100 km.</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="citymileage-val-tbl2">
                                   
                                </div>
                            </div>
                        </div>
                        <div data-v-3d705eaa="">
                            <div data-v-3d705eaa="" class="EquipmentDetails-item">
                                <div data-v-3d705eaa="" class="EquipmentDetails-title">
                                    MSRP<div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text">MSRP stands for Manufacturer's Suggested Retail Price, the price recommended by the manufacturer for a vehicle.</div>
                                    </div>
                                </div>
                                <div data-v-3d705eaa="" class="EquipmentDetails-value" id="msrp-val-tbl">
                                    
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
    
            </div>
            <!----> <!----> <!---->
            <div class="con">
                <div class="VhModule VhModule--medium custom-style-div">
    
                    <h2 data-cy="detailed-records" class="section-title2 ll-at-background" 
                    style="background: #4169E1 ; border-radius:10px 10px 0 0;">
                        <i class="fa-regular fa-file-lines"
                                            style="font-size: 38px; margin-left: 7px;"></i>
                                            
                        Sale Records
                        <div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text" style="font-size:14px;">Sale records refer to documented details of vehicle transactions, including dates, prices, and buyer information.</div>
                                    </div>
                    </h2>
                    
                    <div data-v-1a194d39="" class="VehicleHistory">
    
                        <table data-v-1a194d39="" class="Table sm:hidden">
                            <thead data-v-1a194d39="" class="Table-header">
                                <tr data-v-1a194d39="">
                                    <th data-v-1a194d39="" scope="col">
                                        Date
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        YMM
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Seller Name
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Mileage
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Listing Price
                                    </th>
                                </tr>
                            </thead>
                            <tbody data-v-1a194d39="" class="Table-body" id="sale-records-body">
                                <!-- <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2019-08-21 </td>
                                    <td data-v-1a194d39="">2003 Chevrolet Tahoe</td>
                                    <td data-v-1a194d39="">Stevinson Chevrolet West</td>
                                    <td data-v-1a194d39="">209,032 miles</td>
                                    <td data-v-1a194d39="">undefined</td>
                                </tr>
                                <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2020-04-30 </td>
                                    <td data-v-1a194d39="">1994 Toyota Supra</td>
                                    <td data-v-1a194d39="">Pandasareawesome</td>
                                    <td data-v-1a194d39="">105,000 miles</td>
                                    <td data-v-1a194d39="">$54,999</td>
                                </tr>
                                <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2020-04-30</td>
                                    <td data-v-1a194d39="">1994 Toyota Supra</td>
                                    <td data-v-1a194d39="">Pandasareawesome</td>
                                    <td data-v-1a194d39="">105,000 miles</td>
                                    <td data-v-1a194d39="">$54,999</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="con">
                <div class="VhModule VhModule--medium custom-style-div">
    
                    <h2 data-cy="detailed-records" class="section-title2 ll-at-background" style="background: linear-gradient(90deg, rgba(14,106,190,0.9612219887955182) 0%, rgba(0,134,159,1) 81%); border-radius: 10px 10px 0 0;">
                        <i class="fa-solid fa-file-signature"
                                            style="font-size: 38px; margin-left: 7px;"></i>
                                           
                        Title Records
                        <div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text" style="font-size:14px;">Title record refers to the official documentation showing a vehicle's ownership history and legal status.</div>
                                    </div> 
                    </h2>
                    
                    <div data-v-1a194d39="" class="VehicleHistory">
    
                        <table data-v-1a194d39="" class="Table sm:hidden">
                            <thead data-v-1a194d39="" class="Table-header">
                                <tr data-v-1a194d39="">
                                    <th data-v-1a194d39="" scope="col">
                                        Date
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        State of Title
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Type
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Mileage
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        VIN
                                    </th>
                                </tr>
                            </thead>
                            <tbody data-v-1a194d39="" class="Table-body" id="title-records-body">
                                <!-- <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2019-08-21 </td>
                                    <td data-v-1a194d39="">TX</td>
                                    <td data-v-1a194d39="">Current</td>
                                    <td data-v-1a194d39="">EXEMPT mi</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                </tr>
                                <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2020-04-30 </td>
                                    <td data-v-1a194d39="">CO</td>
                                    <td data-v-1a194d39="">Historical</td>
                                    <td data-v-1a194d39="">57187 mi</td>
                                    <td data-v-1a194d39="">$1GNEK13ZX3R298984</td>
                                </tr>
                                <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2020-04-30</td>
                                    <td data-v-1a194d39="">1994 Toyota Supra</td>
                                    <td data-v-1a194d39="">CO</td>
                                    <td data-v-1a194d39="">57187 mi</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="con">
                <div class="VhModule VhModule--medium custom-style-div">
                    <h2 data-cy="detailed-records" class="section-title2 ll-at-background" 
                    style=" border-radius: 10px 10px 0 0;
                    background: #DC143C;">
                        <i class="fa-solid fa-car-burst"
                                            style="font-size: 38px; margin-left: 7px;"></i>
                        Accident Records
                        <div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text" style="font-size:14px;">Accident records detail a vehicle's history of collisions or damage.</div>
                                    </div>
                    </h2>
                    
                    <div data-v-1a194d39="" class="VehicleHistory">
    
                        <table data-v-1a194d39="" class="Table sm:hidden">
                            <thead data-v-1a194d39="" class="Table-header">
                                <tr data-v-1a194d39="">
                                    <th data-v-1a194d39="" scope="col">
                                        Date
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Record Type
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Source Name
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Crash Location
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Manner of Collision
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Estimated Damage
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Damage Severity
                                    </th>
                                </tr>
                            </thead>
                            <tbody data-v-1a194d39="" class="Table-body" id="accident-body">
                                <!-- <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2019-08-21 </td>
                                    <td data-v-1a194d39="">TX</td>
                                    <td data-v-1a194d39="">Current</td>
                                    <td data-v-1a194d39="">EXEMPT mi</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                </tr>
                                <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2019-08-21 </td>
                                    <td data-v-1a194d39="">TX</td>
                                    <td data-v-1a194d39="">Current</td>
                                    <td data-v-1a194d39="">EXEMPT mi</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                </tr>
                                <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2019-08-21 </td>
                                    <td data-v-1a194d39="">TX</td>
                                    <td data-v-1a194d39="">Current</td>
                                    <td data-v-1a194d39="">EXEMPT mi</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="con">
                <div class="VhModule VhModule--medium custom-style-div">
                    <h2 data-cy="detailed-records" class="section-title2 ll-at-background" 
                    style="background:#1B3A6B;
                    border-radius: 10px 10px 0 0;">
                        <i class="fa-solid fa-file-export" style="font-size: 38px; margin-left: 7px;"></i>
                        Lien / Impound / Export Records
                        <div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text" style="font-size:14px;">Lien, impound, and export records detail legal claims, towing incidents, and international shipments of a vehicle.</div>
                                    </div>
                    </h2>
                   
                    <div data-v-1a194d39="" class="VehicleHistory">
    
                        <table data-v-1a194d39="" class="Table sm:hidden">
                            <thead data-v-1a194d39="" class="Table-header">
                                <tr data-v-1a194d39="">
                                    <th data-v-1a194d39="" scope="col">
                                        Date
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        VIN	
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Agency
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Record Type
                                    </th>
                                    <!-- <th data-v-1a194d39="" scope="col">
                                        Manner of Collision
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Estimated Damage
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Damage Severity
                                    </th> -->
                                </tr>
                            </thead>
                            <tbody data-v-1a194d39="" class="Table-body" id="lie-body">
                                <!-- <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2019-08-21 </td>
                                    <td data-v-1a194d39="">TX</td>
                                    <td data-v-1a194d39="">Current</td>
                                    <td data-v-1a194d39="">EXEMPT mi</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                </tr>
                                <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2019-08-21 </td>
                                    <td data-v-1a194d39="">TX</td>
                                    <td data-v-1a194d39="">Current</td>
                                    <td data-v-1a194d39="">EXEMPT mi</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                </tr>
                                <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2019-08-21 </td>
                                    <td data-v-1a194d39="">TX</td>
                                    <td data-v-1a194d39="">Current</td>
                                    <td data-v-1a194d39="">EXEMPT mi</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="con">
                <div class="VhModule VhModule--medium custom-style-div">
                    <h2 data-cy="detailed-records" class="section-title2 ll-at-background" 
                    style="background: #36454F; border-radius: 10px 10px 0 0;">
                        <i class="fa-solid fa-gavel" style="font-size: 38px; margin-left: 7px;"></i>
                        
                        Salvage Auction Records
                        <div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text" style="font-size:14px;">Salvage auction records document the history of a vehicle being sold at auction after being deemed a total loss.</div>
                                    </div>
                    </h2>
                    
                    <div data-v-1a194d39="" class="VehicleHistory">
    
                        <table data-v-1a194d39="" class="Table sm:hidden">
                            <thead data-v-1a194d39="" class="Table-header">
                                <tr data-v-1a194d39="">
                                    <th data-v-1a194d39="" scope="col">
                                        Date
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Type
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Location	
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Primary Damager
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Secondary Damager
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Odometer
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Sale Document
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Estimated Damage
                                    </th>
                                </tr>
                            </thead>
                            <tbody data-v-1a194d39="" class="Table-body" id="jsi-body">
                                <!-- <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2019-08-21 </td>
                                    <td data-v-1a194d39="">TX</td>
                                    <td data-v-1a194d39="">Current</td>
                                    <td data-v-1a194d39="">EXEMPT mi</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                </tr>
                                <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2019-08-21 </td>
                                    <td data-v-1a194d39="">TX</td>
                                    <td data-v-1a194d39="">Current</td>
                                    <td data-v-1a194d39="">EXEMPT mi</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                </tr>
                                <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2019-08-21 </td>
                                    <td data-v-1a194d39="">TX</td>
                                    <td data-v-1a194d39="">Current</td>
                                    <td data-v-1a194d39="">EXEMPT mi</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="con">
                <div class="VhModule VhModule--medium custom-style-div">
                    <h2 data-cy="detailed-records" class="section-title2 ll-at-background" 
                    style="background: #228B22;
                    border-radius:10px 10px 0 0;">
                        <i class="fa-solid fa-check-to-slot" style="font-size: 38px; margin-left: 7px;"></i>
                        Checks Records
                        <div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text" style="font-size:14px;">Check records refer to the documentation of a vehicle's history related to any issued checks or payments.</div>
                                    </div>
                    </h2>
                   
                    <div data-v-1a194d39="" class="VehicleHistory">
    
                        <table data-v-1a194d39="" class="Table sm:hidden">
                            <thead data-v-1a194d39="" class="Table-header">
                                <tr data-v-1a194d39="">
                                    <th data-v-1a194d39="" scope="col">
                                        Date
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Brand Title
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Brand Code	
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Brand Name
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody data-v-1a194d39="" class="Table-body" id="checks-body">
                                <!-- <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2019-08-21 </td>
                                    <td data-v-1a194d39="">TX</td>
                                    <td data-v-1a194d39="">Current</td>
                                    <td data-v-1a194d39="">EXEMPT mi</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                </tr>
                                <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2019-08-21 </td>
                                    <td data-v-1a194d39="">TX</td>
                                    <td data-v-1a194d39="">Current</td>
                                    <td data-v-1a194d39="">EXEMPT mi</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                </tr>
                                <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2019-08-21 </td>
                                    <td data-v-1a194d39="">TX</td>
                                    <td data-v-1a194d39="">Current</td>
                                    <td data-v-1a194d39="">EXEMPT mi</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="con">
                <div class="VhModule VhModule--medium custom-style-div">
                    <h2 data-cy="detailed-records" class="section-title2 ll-at-background" 
                    style="background: #4682B4;
                    border-radius: 10px 10px 0 0;">
                        <i class="fa-solid fa-user-secret" style="font-size: 38px; margin-left: 7px;"></i>
                        Theft Records
                        <div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text" style="font-size:14px;">Theft records document instances of a vehicle being reported stolen.</div>
                                    </div>
                    </h2>
                    
                    <div data-v-1a194d39="" class="VehicleHistory">
    
                        <table data-v-1a194d39="" class="Table sm:hidden">
                            <thead data-v-1a194d39="" class="Table-header">
                                <tr data-v-1a194d39="">
                                    <th data-v-1a194d39="" scope="col">
                                        Date
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Record Type
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Theft Status	
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Source Website
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Date of Theft
    
                                    </th>
                                    <!-- <th data-v-1a194d39="" scope="col">
                                        Odometer
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Sale Document
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Estimated Damage
                                    </th> -->
                                </tr>
                            </thead>
                            <tbody data-v-1a194d39="" class="Table-body" id="theft-body">
                                <!-- <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2019-08-21 </td>
                                    <td data-v-1a194d39="">TX</td>
                                    <td data-v-1a194d39="">Current</td>
                                    <td data-v-1a194d39="">EXEMPT mi</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                </tr>
                                <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2019-08-21 </td>
                                    <td data-v-1a194d39="">TX</td>
                                    <td data-v-1a194d39="">Current</td>
                                    <td data-v-1a194d39="">EXEMPT mi</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                </tr>
                                <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2019-08-21 </td>
                                    <td data-v-1a194d39="">TX</td>
                                    <td data-v-1a194d39="">Current</td>
                                    <td data-v-1a194d39="">EXEMPT mi</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="con">
                <div class="VhModule VhModule--medium custom-style-div">
                    <h2 data-cy="detailed-records" class="section-title2 ll-at-background" 
                    style="border-radius:10px 10px 0 0;
                    background: #C46210;">
                        <i class="fa-solid fa-scale-balanced" style="font-size: 38px; margin-left: 7px;"></i>
                        
                        Junk / Salvage / Insurance Records
                        <div class="tooltip-container">
                                        <i class="fa-regular fa-circle-question"
                                            style="font-size: 18px; margin-left: 7px;"></i>
                                        <div class="tooltip-text" style="font-size:14px;">Junk, salvage, and insurance records detail a vehicle's total loss status, salvage history, and insurance claims or coverage.</div>
                                    </div>
                    </h2>
                    
                    <div data-v-1a194d39="" class="VehicleHistory">
    
                        <table data-v-1a194d39="" class="Table sm:hidden">
                            <thead data-v-1a194d39="" class="Table-header">
                                <tr data-v-1a194d39="">
                                    <th data-v-1a194d39="" scope="col">
                                        Date
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Brander Name
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Vehicle Disposition
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Intended for Export
                                    </th>
                                    <!-- <th data-v-1a194d39="" scope="col">
                                        Date of Theft
    
                                    </th> -->
                                    <!-- <th data-v-1a194d39="" scope="col">
                                        Odometer
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Sale Document
                                    </th>
                                    <th data-v-1a194d39="" scope="col">
                                        Estimated Damage
                                    </th> -->
                                </tr>
                            </thead>
                            <tbody data-v-1a194d39="" class="Table-body" id="jsi-body">
                                <!-- <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2019-08-21 </td>
                                    <td data-v-1a194d39="">TX</td>
                                    <td data-v-1a194d39="">Current</td>
                                    <td data-v-1a194d39="">EXEMPT mi</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                </tr>
                                <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2019-08-21 </td>
                                    <td data-v-1a194d39="">TX</td>
                                    <td data-v-1a194d39="">Current</td>
                                    <td data-v-1a194d39="">EXEMPT mi</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                </tr>
                                <tr data-v-1a194d39="">
                                    <td data-v-1a194d39="">2019-08-21 </td>
                                    <td data-v-1a194d39="">TX</td>
                                    <td data-v-1a194d39="">Current</td>
                                    <td data-v-1a194d39="">EXEMPT mi</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                    <td data-v-1a194d39="">1GNEK13ZX3R298984</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

</div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    // Load the Lottie animation
    var animation = lottie.loadAnimation({
        container: document.getElementById('spin-load-1'), // the DOM element to replace the spinner
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: '/img/lottie_animation_report.json' // your Lottie file URL
    });
</script>
  <script>
    function pop_data(report_data) {
      //Vehicle Specifications
      $('#rp-ymkt').html(report_data.attributes.year + " " + report_data.attributes.make + " " + report_data.attributes.model + " " + report_data.attributes.trim);
      $('#rp-vin').html(report_data.attributes.vin);
      $('#rp-engine').html(report_data.attributes.engine);
      $('#rp-fuel').html(report_data.attributes.fuel_type);
      $('#rp-style').html(report_data.attributes.style);
      $('#vin-val-tbl').html(report_data.attributes.vin);
      $('#year-val-tbl').html(report_data.attributes.year);
      $('#year-val-tbl2').html(report_data.attributes.year);
      $('#make-val-tbl').html(report_data.attributes.make);
      $('#model-val-tbl').html(report_data.attributes.model);
      $('#trim-val-tbl').html(report_data.attributes.trim);
      $('#engine-val-tbl').html(report_data.attributes.engine);
      $('#engine-val-tbl2').html(report_data.attributes.engine);
      $('#madein-val-tbl').html(report_data.attributes.made_in);
      $('#madein-val-tbl2').html(report_data.attributes.made_in);
      $('#style-val-tbl').html(report_data.attributes.style);
      $('#style-val-tbl2').html(report_data.attributes.style);
      $('#steertype-val-tbl').html(report_data.attributes.steering_type);
      $('#abs-val-tbl').html(report_data.attributes["anti-brake_system"]);
      $('#fueltype-val-tbl').html(report_data.attributes.fuel_type);
      $('#fuelcapacity-val-tbl').html(report_data.attributes.fuel_capacity);
      $('#fuelcapacity-val-tbl2').html(report_data.attributes.fuel_capacity);
      $('#gweight-val-tbl').html(report_data.attributes.gross_vehicle_weight_rating);
      $('#oheight-val-tbl').html(report_data.attributes.overall_height);
      $('#olength-val-tbl').html(report_data.attributes.overall_length);
      $('#owidth-val-tbl').html(report_data.attributes.overall_width);
      $('#standardseating-val-tbl').html(report_data.attributes.standard_seating);
      $('#optionalseating-val-tbl').html(report_data.attributes.optional_seating);
      $('#hgmileage-val-tbl').html(report_data.attributes.highway_mileage);
      $('#hgmileage-val-tbl2').html(report_data.attributes.highway_mileage);
      $('#citymileage-val-tbl').html(report_data.attributes.city_mileage);
      $('#citymileage-val-tbl2').html(report_data.attributes.city_mileage);
      $('#invoiceprice-val-tbl').html(report_data.attributes.invoice_price);
      $('#invoiceprice-val-tbl2').html(report_data.attributes.invoice_price);
      $('#msrp-val-tbl').html(report_data.attributes.invoice_price);
      $('#ownerfound').html(report_data.sales.length);
      $('#accifound').html(report_data.accidents.length);
      var rptable_html = "";
      if (report_data.accidents.length > 0) {
        rptable_html += '<tr class="report-card-table-tr"> <td  class="report-card-table-td td-l-sm"><img class="r-c-img" src="img/9.png" style="height: 40px;" /></td><td class="report-card-table-td">' + report_data.accidents.length + ' Accident or Damage reported by VinAudit</td></tr>';
      } else {
        rptable_html += '<tr class="report-card-table-tr"> <td  class="report-card-table-td td-l-sm"><img class="r-c-img" src="img/10.png" style="height: 40px;" /></td><td class="report-card-table-td">No Accident or Damage reported by VinAudit</td></tr>';
      }
      if (report_data.titles.length == 1) {
        rptable_html += '<tr class="report-card-table-tr"><td  class="report-card-table-td td-l-sm"><img class="r-c-img" src="img/11.png" style="height: 40px;" /></td><td class="report-card-table-td">VinAudit 1-Owner vehicle</td> </tr>';
      } else {
        rptable_html += '<tr class="report-card-table-tr"><td  class="report-card-table-td td-l-sm"><img class="r-c-img" src="img/11.png" style="height: 40px;" /></td><td class="report-card-table-td">VinAudit ' + report_data.titles.length + '-Owner vehicle</td> </tr>';

        rptable_html += '<tr class="report-card-table-tr"><td  class="report-card-table-td td-l-sm"><img class="r-c-img" src="img/12.png" style="height: 40px;" /></td><td class="report-card-table-td"><span>' + report_data.titles[0].meter + '</span> Last reported odometer reading</td></tr>';
      }
      rptable_html += '<tr class="report-card-table-tr"><td  class="report-card-table-td td-l-sm"><img class="r-c-img" src="img/13.png" style="height: 40px;" /></td><td class="report-card-table-td"><span>' + report_data.jsi.length + "/" + report_data.checks.length + "/" + report_data.salvage.length + '</span> JSI/Checks/Salvage </td></tr>';
      rptable_html += '<tr class="report-card-table-tr"><td  class="report-card-table-td td-l-sm"><img class="r-c-img" src="img/14.png" style="height: 40px;" /></td><td class="report-card-table-td"><span>' + report_data.sales.length + '</span> Times vehicle on market </td></tr>';
      if ($('#r-c-tbody tr').length > 1) {
        $('#r-c-tbody').html(rptable_html);
      } else {
        $('#r-c-tbody').append(rptable_html);
      }
      //title-records-body
      if (report_data.titles.length > 0) {
        let table_record = "";

        for (let i = 0; i < report_data.titles.length; i++) {
          table_record += "<tr>";
          //date state type mile vin 
          table_record += "<td>" + report_data.titles[i].date + "</td>";
          table_record += "<td>" + report_data.titles[i].state + "</td>";
          if (report_data.titles[i]['current'] == true) {
            table_record += "<td>Current</td>";

          } else {
            table_record += "<td>Historical</td>";

          }
          //table_record += "<td>"+report_data.titles[i]['current'] == true ? "Current" : "Historical" +"</td>";
          table_record += "<td>" + report_data.titles[i].meter + " mi</td>";
          table_record += "<td>" + report_data.titles[i].vin + "</td>";
          table_record += "</tr>";
        }
        $('#title-records-body').html(table_record);
      }
      //sale-records-body
      
      if (report_data.sales.length > 0) {
        let table_record = "";
        for (let i = 0; i < report_data.sales.length; i++) {
          table_record += "<tr>";
          //date state type mile vin 
          table_record += "<td>" + report_data.sales[i].date + "</td>";
          table_record += "<td>" + report_data.sales[i].vehicle_year + " " + report_data.sales[i].vehicle_make + " " + report_data.sales[i].vehicle_model + "</td>";
          table_record += "<td>" + report_data.sales[i].seller_name + "</td>";
          table_record += "<td>" + report_data.sales[i].vehicle_mileage + " </td>";
          table_record += "<td>" + report_data.sales[i].listing_price + "</td>";
          table_record += "</tr>";
        }
        $('#sale-records-body').html(table_record);
      }
      //jsi-body
      if (report_data.jsi.length > 0) {
        let table_record = "";
        /**
         * 
         * 
         * 
              <td scope="col">Date</td>
              <td scope="col">Brander Name</td>
              <td scope="col">Vehicle Disposition</td>
              <td scope="col">Intended for Export</td>
         */
        for (let i = 0; i < report_data.jsi.length; i++) {
          table_record += "<tr>";
          //date state type mile vin 
          table_record += "<td>" + report_data.jsi[i].date + "</td>";
          table_record += "<td>" + report_data.jsi[i].brander_name + "</td>";
          table_record += "<td>" + report_data.jsi[i].vehicle_disposition + "</td>";
          table_record += "<td>" + report_data.jsi[i].intended_for_export + " </td>";
          table_record += "</tr>";
        }
        $('#jsi-body').html(table_record);
      }
      //lie-body
      if (report_data.lie.length > 0) {
        let table_record = "";
        /**
         * 
         * 
         * 
              <td scope="col">Date</td>
              <td scope="col">VIN</td>
              <td scope="col">Agency</td>
              <td scope="col">Record Type</td>
         */
        for (let i = 0; i < report_data.lie.length; i++) {
          table_record += "<tr>";
          //date state type mile vin 
          table_record += "<td>" + report_data.lie[i].date + "</td>";
          table_record += "<td>" + report_data.lie[i].vin + "</td>";
          table_record += "<td>" + report_data.lie[i].agency + "</td>";
          table_record += "<td>" + report_data.lie[i].record_type + " </td>";
          table_record += "</tr>";
        }
        $('#lie-body').html(table_record);
      }
      if (report_data.checks.length > 0) {
        let table_record = "";
        for (let i = 0; i < report_data.checks.length; i++) {
          table_record += "<tr>";
          /*
           <td scope="col">Date</td>
                                  <td scope="col">Brand Title</td>
                                  <td scope="col">Brand Code</td>
                                  <td scope="col">Brand Name</td>
          */
          //date state type mile vin 
          table_record += "<td>" + report_data.checks[i].date + "</td>";
          table_record += "<td>" + report_data.checks[i].brand_title + "</td>";
          table_record += "<td>" + report_data.checks[i].brand_code + "</td>";
          table_record += "<td>" + report_data.checks[i].brander_name + " </td>";
          table_record += "</tr>";
        }
        $('#checks-body').html(table_record);
      }
      //theft-body
      if (report_data.thefts.length > 0) {
        let table_record = "";
        /**
         * 
         * 
         * 
              <td scope="col">Date</td>
              <td scope="col">Record Type</td>
              <td scope="col">Theft Status</td>
              <td scope="col">Source Website</td>
              <td scope="col">Date of theft</td>
         */
        for (let i = 0; i < report_data.thefts.length; i++) {
          table_record += "<tr>";
          //date state type mile vin 
          table_record += "<td>" + report_data.thefts[i].date + "</td>";
          table_record += "<td>" + report_data.thefts[i].record_type + "</td>";
          table_record += "<td>" + report_data.thefts[i].theft_status + "</td>";
          table_record += "<td>" + report_data.thefts[i].source_website + " </td>";
          table_record += "<td>" + report_data.thefts[i].theft_reported_date + " </td>";

          table_record += "</tr>";
        }
        $('#theft-body').html(table_record);
      }
      //accident-body
      if (report_data.accidents.length > 0) {
        let table_record = "";
        /**
         * 
         * 
         * 
              <td scope="col">Date</td>
              <td scope="col">Record Type</td>
              <td scope="col">Source Name</td>
              <td scope="col">Crash Location</td>
              <td scope="col">Manner of Collision</td>
              <td scope="col">Estimated Damage</td>
              <td scope="col">Damage Severity</td>
         */
        for (let i = 0; i < report_data.accidents.length; i++) {
          table_record += "<tr>";
          //date state type mile vin 
          table_record += "<td>" + report_data.accidents[i].date + "</td>";
          table_record += "<td>" + report_data.accidents[i].type + "</td>";
          table_record += "<td>" + report_data.accidents[i].source_name + "</td>";
          table_record += "<td>" + report_data.accidents[i].crash_location + " </td>";
          table_record += "<td>" + report_data.accidents[i].manner_of_collision + " </td>";
          table_record += "<td>" + report_data.accidents[i].estimated_damage + " </td>";
          table_record += "<td>" + report_data.accidents[i].damage_severity + " </td>";

          table_record += "</tr>";
        }
        $('#accident-body').html(table_record);
      }
      //salvage-body
      if (report_data.salvage.length > 0) {
        let table_record = "";
        /**
         * 
         * 
              <td scope="col">Date</td>
              <td scope="col">Type</td>
              <td scope="col">Location</td>
              <td scope="col">Primary Damager</td>
              <td scope="col">Secondary Damager</td>
              <td scope="col">Odometer</td>
              <td scope="col">Sale Document</td>
              <td scope="col">Estimated Damage</td>
          */
        for (let i = 0; i < report_data.salvage.length; i++) {
          table_record += "<tr>";
          //date state type mile vin 
          table_record += "<td>" + report_data.salvage[i].date + "</td>";
          table_record += "<td>" + report_data.salvage[i].type + "</td>";
          table_record += "<td>" + report_data.salvage[i].location + "</td>";
          table_record += "<td>" + report_data.salvage[i].primary_damage + " </td>";
          table_record += "<td>" + report_data.salvage[i].secondary_damage + " </td>";
          table_record += "<td>" + report_data.salvage[i].odometer + " </td>";
          table_record += "<td>" + report_data.salvage[i].sale_document + " </td>";
          table_record += "<td>" + report_data.salvage[i].estimated_damage + " </td>";

          table_record += "</tr>";
        }
        $('#salvage-body').html(table_record);
      }
    }
    var report_data = "";
    
    $(document).ready(function () {
      $('#historyreportbtn').click(function () {
        // console.log($("[name=vin]").val());
        $('#spin-load-1').css({ "display": "inline-block" });
        if (report_data == "") {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
          $.ajax({
            method: "POST",
            url: "/history",
            headers: {
                    'X-CSRF-TOKEN': csrfToken // Include CSRF token in the headers
                },
            data: {
              "vin": $("[name=vin]").val(),
            },
            success: function (data) {
              // console.log(data);
              
              $('#spin-load-1').css({ "display": "none" });
              report_data = data.data;
              pop_data(report_data)
            },
            error: function (jqXHR, textStatus, errorThrown) {
              //alert(errorThrown);
              return false;
              $('#spin-load-1').css({ "display": "none" });
            }
          });

        } else {
          pop_data(report_data)
          $('#spin-load-1').css({ "display": "none" });

        }
        $.ajax({
          method: "GET",
          
          url: '/history2',
          data: {
              "vin": $("[name=vin]").val(),
            },
          success: function (data) {
            //data = JSON.parse(data);
            // console.log(data);
            // console.log(data.recalls.length);
            let html_d = '';
            if (data.recalls.length > 0) {
              html_d = '<tr class="report-card-table-tr"><td  class="report-card-table-td td-l-sm"><img class="r-c-img" src="img/15.png" style="height: 40px;" /></td><td class="report-card-table-td">At least ' + data.recalls.length + ' open recall</td></tr>';

              $('#r-c-tbody').append(html_d);
            } else {
              // html_d = '<tr class="report-card-table-tr"><td  class="report-card-table-td td-l-sm"><img class="r-c-img" src="https://c.maxallowance.com/assets/vorecall.png" style="height: 40px;" /></td><td class="report-card-table-td">At least 1 open recall</td></tr>';

            }


          },
          error: function (jqXHR, textStatus, errorThrown) {

            return false;
          }})
        });

      $('a.clickable-link').click(function () {
        // console.log($("[name=vin]").val());
        $('#spin-load-1').css({ "display": "inline-block" });
        if (report_data == "") {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            var id = $(this).data('id');
            // console.log(id);
          $.ajax({
            method: "POST",
            url: "/viewreport",
            headers: {
                    'X-CSRF-TOKEN': csrfToken // Include CSRF token in the headers
                },
            data: {
              "id": id
            },
            success: function (data) {
              // console.log(data);
              $('#spin-load-1').css({ "display": "none" });
              report_data = data.data;
              pop_data(report_data)
              
            },
            error: function (jqXHR, textStatus, errorThrown) {
              //alert(errorThrown);
              return false;
              $('#spin-load-1').css({ "display": "none" });
            }
          });

        } else {
          pop_data(report_data)
          $('#spin-load-1').css({ "display": "none" });

        }
        $.ajax({
          method: "GET",
          
          url: '/viewreport2',
          data: {
              "id": id
            },
          success: function (data) {
            //data = JSON.parse(data);
            // console.log(data);
            // console.log(data.recalls.length);
            let html_d = '';
            if (data.recalls.length > 0) {
              html_d = '<tr class="report-card-table-tr"><td  class="report-card-table-td td-l-sm"><img class="r-c-img" src="img/15.png" style="height: 40px;" /></td><td class="report-card-table-td">At least ' + data.recalls.length + ' open recall</td></tr>';

              $('#r-c-tbody').append(html_d);
            } else {
              // html_d = '<tr class="report-card-table-tr"><td  class="report-card-table-td td-l-sm"><img class="r-c-img" src="https://c.maxallowance.com/assets/vorecall.png" style="height: 40px;" /></td><td class="report-card-table-td">At least 1 open recall</td></tr>';

            }


          },
          error: function (jqXHR, textStatus, errorThrown) {

            return false;
          }
        });
      });
      //$('#r-c-tbody').html(rptable_html);

      $('#printhistory-report').on('click', function () {
        // Clone the div to retain original content and styles
        var $printableDiv = $('#print-div').clone();
        // Create a new window for printing
        var $printWindow = window.open('', '_blank');
        $printWindow.document.open();
        $printWindow.document.write('<html><head><title>Print</title>');
        $printWindow.document.write('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />');
        $printWindow.document.write('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.min.css" integrity="sha512-i1b/nzkVo97VN5WbEtaPebBG8REvjWeqNclJ6AItj7msdVcaveKrlIIByDpvjk5nwHjXkIqGZscVxOrTb9tsMA==" crossorigin="anonymous" referrerpolicy="no-referrer" />');
        $printWindow.document.write('<style>.bold-text-table{font-weight: 700;}.main-wrap-vntb-ld{display:flex;justify-content: center;align-items: center;}.wrap-vntb-ld{display:flex;justify-content: center;align-items: center;width: 100%;flex-direction: column;border: 1px solid black;border-radius: 10px;overflow: hidden;}.wrap-vntb-head-dl{display:flex;justify-content: space-between;align-items: center;background: -webkit-linear-gradient(-45deg, #308AC2 1%, #7ccbfc 99%);width: 100%;padding: 15px 18px;color:white;}.vntb-tble-wrap{border: 1px solid black;display: flex;margin-top: 50px;width: 90%;border-radius: 10px;overflow: hidden;flex-direction: column;}.vntb-tble-wrp-head{display:flex;justify-content: space-between;align-items: center;background:-webkit-linear-gradient(-45deg,#308AC2 1%,#225E70 99%);width: 100%;padding: 15px 18px 0 18px;color:white;}.main-wrap-vntb-ld td{padding: 0 !important;text-align: center !important;}</style>');

        $printWindow.document.write(`<style>@media print {
        .Table-header th {
    border-bottom: 1px solid grey;
    font-size: 14px;
    min-width: 4.5rem;
    padding: 1rem .5rem;
    text-align: center;
}

.Table-body tr:nth-child(2n) {
    background-color: lightcyan;
}

.Table-body td {
    min-width: 4.5rem;
    padding: 1rem .5rem;
}
        .ll-at-background{
    background-color: #25667F;
    padding: 20px 10px;
}
        .section-title2 {
        border-bottom: 1px solid grey;
        padding-bottom: .25rem;
        margin: 0;
        color: white;
    }
        .custom-style-div2{
    max-width: 1500px;
    margin: 0 auto;
    width: 100%;
    
}
.EquipmentDetails[data-v-3d705eaa] {
        -webkit-columns: 4;
        -moz-columns: 4;
        column-count: 4;
}
.EquipmentDetails-value[data-v-3d705eaa] {
    margin-bottom: .5rem;
    font-weight: 400;
    font-size: 13px;
    
}
.sample-data {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
}

            .bodydiv{
    border: 2px solid black;
    width: 80%;
    max-width: 1500px;
    margin: 20px auto;
    padding: 40px;
    border-radius: 20px;
}
.con{
    border: 1px solid black;
    margin-bottom: 20px;
    border-radius: 10px;
    page-break-inside: avoid;
}
p{
    margin-left: 10px;
}
.tooltip-container {
    position: relative;
    display: inline-block;
}

.tooltip-text {
    visibility: hidden;
    width: 450px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -75px;
    opacity: 0;
    transition: opacity 0.3s;
    overflow: visible;
}

.tooltip-container:hover .tooltip-text {
    visibility: visible;
    opacity: 1;
    overflow: visible;
}


    
.custom-style-div{
    max-width: 1500px;
    margin: 0 auto;
    width: 100%;
    overflow: visible;
}
.driving-checkout__row {
        
        display flex
        align-items: start;
        column-gap: 20px;
        padding-top: 0;
        padding-bottom: 0;
}
.driving-checkout__content {
        padding-top: 30px;
    }
.driving-checkout__content .precheck-sample__top img{
    display: flex; 
}
.precheck-sample__top {
        grid-template-columns: 219px 1fr;
        column-gap: 20px;
        row-gap: 16px;
    }


    .precheck-sample__specs {
        grid-column: 2 / 3;
    }

.sample-data {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
}

.sample-data__item {
    display: flex;
    align-items: center;
    column-gap: 10px;
    padding: 12px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
.precheck-sample__img {
    width: 180px;
    height: 80px;
    object-fit: contain;
    border-radius: 6px;
}
.sample-data__item:nth-child(odd) {
    padding-left: 0;
    border-right: 1px solid rgba(0, 0, 0, 0.1);
}

.sample-data__item:nth-child(even) {
    padding-right: 0;
}

.sample-data__item:nth-child(1),
.sample-data__item:nth-child(2) {
    padding-top: 0;
}

.sample-data__item:nth-last-child(1),
.sample-data__item:nth-last-child(2) {
    padding-bottom: 0;
    border-bottom: none;
}

.sample-data__icon {
    flex-shrink: 0;
    width: 22px;
    height: 22px;
    object-fit: cover;
}

.sample-data__caption {
    display: block;
    margin-bottom: 2px;
    font-size: 14px;
    line-height: 1.4;
    color: var(--basic-black);
}

.sample-data__value {
    font-size: 14px;
    line-height: 1.3;
    color: var(--dark-grey);
}

.sample-data__item.fail .sample-data__value {
    color: var(--red);
}

.sample-data__item .blc {
    font-weight: 400;
    color: var(--main-blue);
}
.precheck-sample__title {
    margin: 0 0 6px;
    font-size: 14px;
    line-height: 1.3;
    font-weight: 400;
    color: var(--basic-black);
}
.EquipmentDetails-item[data-v-3d705eaa] {
    display: inline-block;
    margin-bottom: 1.5rem
}
}</style>`);
        $printWindow.document.write('</head><body>');
        $printWindow.document.write($printableDiv[0].outerHTML);


        $printWindow.document.write('</body></html>');
        $printWindow.document.close();

        // Print the contents
        setTimeout(function () {
          $printWindow.print();
          $printWindow.close();
        }, 100);
      });
    });
  </script>


{{-- ##################### View Report ######################## --}}
  

  {{-- ########################## View Report ######################## --}}
  <script src="https://kit.fontawesome.com/03112c8f33.js" crossorigin="anonymous"></script>
  <script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script></body>
  
  @include('component.footer')
</body>

</html>