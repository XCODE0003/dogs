@extends('layouts.layout', ['title' => $settings->name . ' | Pet Taxi', 'description' => ''])
@section('head')
@endsection

@section('content')
    <link rel="stylesheet" href="/temple/css/checkouts.css?v={{ time() }}" media="all">
    <style>
        .s_qAq {
            max-width: 350px;
            margin: 0 auto;
        }

        .oQEAZ.WD4IV {
            max-width: 350px;
            margin: 0 auto;
            margin-top: 15px;
        }

        #finButton {
            background-color: black;
        }
    </style>

    <div class="section-header">
        <h1 class="section-header__title">

        </h1>
    </div>

    <div class="section-header">
        <h1 class="section-header__title">
            PET TAXI
        </h1>
    </div>
    <div class="s_qAq">
        <span style="color: #799c29"><strong>• Please note that if you specify the mail of a sender who is registered on our site and has entered his address in your personal cabinet - you do not need to enter his address.</strong></span>
    </div>

    <div style="margin-top: 15px;width: 320px; height: 1px; background: #FFFFF"></div>
    <div class="s_qAq">
        <section aria-label="Contact" class="_1fragem18 _1fragemai">
            <div class="_1ip0g651 _1fragem1e _1fragemai _1fragem1x _1fragem2e">
                <div style="display: flex; justify-content: space-between; align-items: baseline; flex-wrap: wrap;">
                    <h2 id="step-section-primary-header" class="n8k95w1 _1fragemai n8k95w3">
                        Sender (Optional)</h2>
                    {{-- <span class="_19gi7yt0 _19gi7ytg _1fragem1m">Have
                        an account?
                        <a href="https://lonelypups.com/auth/login"
                            class="s2kwpi1 _1fragemai _1fragemax _1fragemb6 s2kwpi2 _1fragemap _1fragemas">Log
                            in</a>
                    </span> --}}
                </div>

                <div class="_1ip0g651 _1fragem1e _1fragemai _1fragem1x _1fragem2e">
                    <div
                        class="invalid-feedback-wrapper _7ozb2u2 _1fragem1t _1fragem2a _1fragemai _1fragem1e _10vrn9p1 _10vrn9p0 _10vrn9p6">
                        <div class="_1fragemai">
                            <label id="email-label" for="email"
                                   class="cektnc3 _1fragemag _1fragemaf _1fragem9y _1fragemb8 _1fragemax _1fragemas _1fragemb6"><span
                                    class="cektnc9"><span
                                        class="rermvf1 _1fragem7t _1fragem7v _1fragem18">Email</span></span></label>
                            <div
                                class="_7ozb2u4 _1fragemai _1fragem1e _1fragem17 _1fragemax _1fragemas _1fragemb6 _1fragemb7 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj ">
                                <input id="email" name="email" placeholder="Email" type="email"
                                       aria-labelledby="email-label" autocomplete="shipping email" autofocus="true"
                                       data-protected-input="true"
                                       class="_7ozb2uu _1fragemai _1fragemb8 _1fragem37 _1fragemae _7ozb2uv _7ozb2u16 _7ozb2u1n"
                                       aria-describedby="error-for-email" aria-invalid="true">
                            </div>
                        </div>
                        <span>
                            <p id="error-for-email" class="ksaxnz0">
                            </p>
                        </span>
                    </div>
                    {{-- <div>
                        <div class="_1frageme0 _1fragemf6">
                            <div class="_1mmswk95 _1frageme0">
                                <input type="checkbox" id="marketing_opt_in" name="marketing_opt_in"
                                    class="_1mmswk97 _1fragemhh _1fragemhf _1fragemhj _1fragemhd _1fragemib _1fragemi8 _1fragemie _1fragemi5 _1fragem4g _1fragem3w _1fragem50 _1fragem3c _1fragemf2 _1fragemf4 _1fragemh3 _1fragem1w _1fragemlj _1fragemld _1fragemlp _1fragemev _1fragemm0">
                                <div class="_1mmswk9l _1frageml5 _1fragemko _1fragemds _1fragemld _1fragemls _1fragemlj">
                                    <span
                                        class="_1fragemh3 _1fragem1w _1fragemd8 _1fragemd4 a8x1wua _1fragemf4 a8x1wug a8x1wum"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false"
                                            aria-hidden="true" class="a8x1wuo _1fragemf4 _1fragemh3 _1fragemd8 _1fragemd4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m12.1 2.8-5.877 8.843a.35.35 0 0 1-.54.054L1.4 7.4">
                                            </path>
                                        </svg></span>
                                </div>
                            </div><label for="marketing_opt_in"
                                class="_1mmswk9h _1fragemf4 _1fragemd8 _1fragemf2 _1fragembs">Email
                                me with news
                                and
                                offers</label>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>

        <div class="_1ip0g651 _1fragem1e _1fragemai _1fragem22 _1fragem2j">
            <section aria-label="Shipping address" class="_1fragem18 _1fragemai">
                <div class="_1ip0g651 _1fragem1e _1fragemai _1fragem1x _1fragem2e">
                    <h2 class="n8k95w1 _1fragemai n8k95w3">
                        Shipping address
                    </h2>
                    <div class="_1ip0g651 _1fragem1e _1fragemai _1fragem1x _1fragem2e">
                        <div id="shippingAddressForm">
                            <div aria-hidden="false" class="pxSEU">
                                <div class="_1ip0g651 _1fragem1e _1fragemai _1fragem1x _1fragem2e">
                                    <div
                                        class="_1fragemai _1fragem1e _1mrl40q3 _1fragem1x _1fragem2e _16s97g73 _16s97g75 _16s97g7b _16s97g7d"
                                        style="--_16s97g72: minmax(0, 1fr); --_16s97g74: minmax(0, 1fr); --_16s97g7a: minmax(0, 1fr); --_16s97g7c: minmax(0, 1fr);">
                                        <div class="vTXBW _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                            <div>
                                                <div class="j2JE7">
                                                    <label for="Select0" class="QOQ2V NKh24"><span class="KBYKh"><span
                                                                class="rermvf1 _1fragem7t _1fragem7v _1fragem18">Country/Region</span></span></label><select
                                                        name="country" id="Select0" required=""
                                                        autocomplete="shipping country" class="_b6uH RR8sg vYo81 RGaKd">
                                                        <option value="US">
                                                            United
                                                            States
                                                        </option>
                                                        <option value="MX">
                                                            Mexico
                                                        </option>
                                                        <option value="SA">
                                                            Saudi
                                                            Arabia
                                                        </option>
                                                        <option value="DO">
                                                            Dominican
                                                            Republic
                                                        </option>
                                                        <option value="AE">
                                                            United
                                                            Arab
                                                            Emirates
                                                        </option>
                                                        <option disabled="" value="">
                                                            ---
                                                        </option>
                                                        <option value="AF">
                                                            Afghanistan
                                                        </option>
                                                        <option value="AX">
                                                            Åland
                                                            Islands
                                                        </option>
                                                        <option value="AL">
                                                            Albania
                                                        </option>
                                                        <option value="DZ">
                                                            Algeria
                                                        </option>
                                                        <option value="AD">
                                                            Andorra
                                                        </option>
                                                        <option value="AO">
                                                            Angola
                                                        </option>
                                                        <option value="AI">
                                                            Anguilla
                                                        </option>
                                                        <option value="AG">
                                                            Antigua
                                                            &amp;
                                                            Barbuda
                                                        </option>
                                                        <option value="AR">
                                                            Argentina
                                                        </option>
                                                        <option value="AM">
                                                            Armenia
                                                        </option>
                                                        <option value="AW">
                                                            Aruba
                                                        </option>
                                                        <option value="AC">
                                                            Ascension
                                                            Island
                                                        </option>
                                                        <option value="AU">
                                                            Australia
                                                        </option>
                                                        <option value="AT">
                                                            Austria
                                                        </option>
                                                        <option value="AZ">
                                                            Azerbaijan
                                                        </option>
                                                        <option value="BS">
                                                            Bahamas
                                                        </option>
                                                        <option value="BH">
                                                            Bahrain
                                                        </option>
                                                        <option value="BD">
                                                            Bangladesh
                                                        </option>
                                                        <option value="BB">
                                                            Barbados
                                                        </option>
                                                        <option value="BY">
                                                            Belarus
                                                        </option>
                                                        <option value="BE">
                                                            Belgium
                                                        </option>
                                                        <option value="BZ">
                                                            Belize
                                                        </option>
                                                        <option value="BJ">
                                                            Benin
                                                        </option>
                                                        <option value="BM">
                                                            Bermuda
                                                        </option>
                                                        <option value="BT">
                                                            Bhutan
                                                        </option>
                                                        <option value="BO">
                                                            Bolivia
                                                        </option>
                                                        <option value="BA">
                                                            Bosnia
                                                            &amp;
                                                            Herzegovina
                                                        </option>
                                                        <option value="BW">
                                                            Botswana
                                                        </option>
                                                        <option value="BR">
                                                            Brazil
                                                        </option>
                                                        <option value="IO">
                                                            British
                                                            Indian
                                                            Ocean
                                                            Territory
                                                        </option>
                                                        <option value="VG">
                                                            British
                                                            Virgin
                                                            Islands
                                                        </option>
                                                        <option value="BN">
                                                            Brunei
                                                        </option>
                                                        <option value="BG">
                                                            Bulgaria
                                                        </option>
                                                        <option value="BF">
                                                            Burkina
                                                            Faso
                                                        </option>
                                                        <option value="BI">
                                                            Burundi
                                                        </option>
                                                        <option value="KH">
                                                            Cambodia
                                                        </option>
                                                        <option value="CM">
                                                            Cameroon
                                                        </option>
                                                        <option value="CA">
                                                            Canada
                                                        </option>
                                                        <option value="CV">
                                                            Cape
                                                            Verde
                                                        </option>
                                                        <option value="BQ">
                                                            Caribbean
                                                            Netherlands
                                                        </option>
                                                        <option value="KY">
                                                            Cayman
                                                            Islands
                                                        </option>
                                                        <option value="CF">
                                                            Central
                                                            African
                                                            Republic
                                                        </option>
                                                        <option value="TD">
                                                            Chad
                                                        </option>
                                                        <option value="CL">
                                                            Chile
                                                        </option>
                                                        <option value="CN">
                                                            China
                                                        </option>
                                                        <option value="CX">
                                                            Christmas
                                                            Island
                                                        </option>
                                                        <option value="CC">
                                                            Cocos
                                                            (Keeling)
                                                            Islands
                                                        </option>
                                                        <option value="CO">
                                                            Colombia
                                                        </option>
                                                        <option value="KM">
                                                            Comoros
                                                        </option>
                                                        <option value="CG">
                                                            Congo
                                                            -
                                                            Brazzaville
                                                        </option>
                                                        <option value="CD">
                                                            Congo
                                                            -
                                                            Kinshasa
                                                        </option>
                                                        <option value="CK">
                                                            Cook
                                                            Islands
                                                        </option>
                                                        <option value="CR">
                                                            Costa
                                                            Rica
                                                        </option>
                                                        <option value="HR">
                                                            Croatia
                                                        </option>
                                                        <option value="CW">
                                                            Curaçao
                                                        </option>
                                                        <option value="CY">
                                                            Cyprus
                                                        </option>
                                                        <option value="CZ">
                                                            Czechia
                                                        </option>
                                                        <option value="CI">
                                                            Côte
                                                            d’Ivoire
                                                        </option>
                                                        <option value="DK">
                                                            Denmark
                                                        </option>
                                                        <option value="DJ">
                                                            Djibouti
                                                        </option>
                                                        <option value="DM">
                                                            Dominica
                                                        </option>
                                                        <option value="DO">
                                                            Dominican
                                                            Republic
                                                        </option>
                                                        <option value="EC">
                                                            Ecuador
                                                        </option>
                                                        <option value="EG">
                                                            Egypt
                                                        </option>
                                                        <option value="SV">
                                                            El
                                                            Salvador
                                                        </option>
                                                        <option value="GQ">
                                                            Equatorial
                                                            Guinea
                                                        </option>
                                                        <option value="ER">
                                                            Eritrea
                                                        </option>
                                                        <option value="EE">
                                                            Estonia
                                                        </option>
                                                        <option value="SZ">
                                                            Eswatini
                                                        </option>
                                                        <option value="ET">
                                                            Ethiopia
                                                        </option>
                                                        <option value="FK">
                                                            Falkland
                                                            Islands
                                                        </option>
                                                        <option value="FO">
                                                            Faroe
                                                            Islands
                                                        </option>
                                                        <option value="FJ">
                                                            Fiji
                                                        </option>
                                                        <option value="FI">
                                                            Finland
                                                        </option>
                                                        <option value="FR">
                                                            France
                                                        </option>
                                                        <option value="GF">
                                                            French
                                                            Guiana
                                                        </option>
                                                        <option value="PF">
                                                            French
                                                            Polynesia
                                                        </option>
                                                        <option value="TF">
                                                            French
                                                            Southern
                                                            Territories
                                                        </option>
                                                        <option value="GA">
                                                            Gabon
                                                        </option>
                                                        <option value="GM">
                                                            Gambia
                                                        </option>
                                                        <option value="GE">
                                                            Georgia
                                                        </option>
                                                        <option value="DE">
                                                            Germany
                                                        </option>
                                                        <option value="GH">
                                                            Ghana
                                                        </option>
                                                        <option value="GI">
                                                            Gibraltar
                                                        </option>
                                                        <option value="GR">
                                                            Greece
                                                        </option>
                                                        <option value="GL">
                                                            Greenland
                                                        </option>
                                                        <option value="GD">
                                                            Grenada
                                                        </option>
                                                        <option value="GP">
                                                            Guadeloupe
                                                        </option>
                                                        <option value="GT">
                                                            Guatemala
                                                        </option>
                                                        <option value="GG">
                                                            Guernsey
                                                        </option>
                                                        <option value="GN">
                                                            Guinea
                                                        </option>
                                                        <option value="GW">
                                                            Guinea-Bissau
                                                        </option>
                                                        <option value="GY">
                                                            Guyana
                                                        </option>
                                                        <option value="HT">
                                                            Haiti
                                                        </option>
                                                        <option value="HN">
                                                            Honduras
                                                        </option>
                                                        <option value="HK">
                                                            Hong
                                                            Kong
                                                            SAR
                                                        </option>
                                                        <option value="HU">
                                                            Hungary
                                                        </option>
                                                        <option value="IS">
                                                            Iceland
                                                        </option>
                                                        <option value="IN">
                                                            India
                                                        </option>
                                                        <option value="ID">
                                                            Indonesia
                                                        </option>
                                                        <option value="IQ">
                                                            Iraq
                                                        </option>
                                                        <option value="IE">
                                                            Ireland
                                                        </option>
                                                        <option value="IM">
                                                            Isle
                                                            of
                                                            Man
                                                        </option>
                                                        <option value="IL">
                                                            Israel
                                                        </option>
                                                        <option value="IT">
                                                            Italy
                                                        </option>
                                                        <option value="JM">
                                                            Jamaica
                                                        </option>
                                                        <option value="JP">
                                                            Japan
                                                        </option>
                                                        <option value="JE">
                                                            Jersey
                                                        </option>
                                                        <option value="JO">
                                                            Jordan
                                                        </option>
                                                        <option value="KZ">
                                                            Kazakhstan
                                                        </option>
                                                        <option value="KE">
                                                            Kenya
                                                        </option>
                                                        <option value="KI">
                                                            Kiribati
                                                        </option>
                                                        <option value="XK">
                                                            Kosovo
                                                        </option>
                                                        <option value="KW">
                                                            Kuwait
                                                        </option>
                                                        <option value="KG">
                                                            Kyrgyzstan
                                                        </option>
                                                        <option value="LA">
                                                            Laos
                                                        </option>
                                                        <option value="LV">
                                                            Latvia
                                                        </option>
                                                        <option value="LB">
                                                            Lebanon
                                                        </option>
                                                        <option value="LS">
                                                            Lesotho
                                                        </option>
                                                        <option value="LR">
                                                            Liberia
                                                        </option>
                                                        <option value="LY">
                                                            Libya
                                                        </option>
                                                        <option value="LI">
                                                            Liechtenstein
                                                        </option>
                                                        <option value="LT">
                                                            Lithuania
                                                        </option>
                                                        <option value="LU">
                                                            Luxembourg
                                                        </option>
                                                        <option value="MO">
                                                            Macao
                                                            SAR
                                                        </option>
                                                        <option value="MG">
                                                            Madagascar
                                                        </option>
                                                        <option value="MW">
                                                            Malawi
                                                        </option>
                                                        <option value="MY">
                                                            Malaysia
                                                        </option>
                                                        <option value="MV">
                                                            Maldives
                                                        </option>
                                                        <option value="ML">
                                                            Mali
                                                        </option>
                                                        <option value="MT">
                                                            Malta
                                                        </option>
                                                        <option value="MQ">
                                                            Martinique
                                                        </option>
                                                        <option value="MR">
                                                            Mauritania
                                                        </option>
                                                        <option value="MU">
                                                            Mauritius
                                                        </option>
                                                        <option value="YT">
                                                            Mayotte
                                                        </option>
                                                        <option value="MX">
                                                            Mexico
                                                        </option>
                                                        <option value="MD">
                                                            Moldova
                                                        </option>
                                                        <option value="MC">
                                                            Monaco
                                                        </option>
                                                        <option value="MN">
                                                            Mongolia
                                                        </option>
                                                        <option value="ME">
                                                            Montenegro
                                                        </option>
                                                        <option value="MS">
                                                            Montserrat
                                                        </option>
                                                        <option value="MA">
                                                            Morocco
                                                        </option>
                                                        <option value="MZ">
                                                            Mozambique
                                                        </option>
                                                        <option value="MM">
                                                            Myanmar
                                                            (Burma)
                                                        </option>
                                                        <option value="NA">
                                                            Namibia
                                                        </option>
                                                        <option value="NR">
                                                            Nauru
                                                        </option>
                                                        <option value="NP">
                                                            Nepal
                                                        </option>
                                                        <option value="NL">
                                                            Netherlands
                                                        </option>
                                                        <option value="NC">
                                                            New
                                                            Caledonia
                                                        </option>
                                                        <option value="NZ">
                                                            New
                                                            Zealand
                                                        </option>
                                                        <option value="NI">
                                                            Nicaragua
                                                        </option>
                                                        <option value="NE">
                                                            Niger
                                                        </option>
                                                        <option value="NG">
                                                            Nigeria
                                                        </option>
                                                        <option value="NU">
                                                            Niue
                                                        </option>
                                                        <option value="NF">
                                                            Norfolk
                                                            Island
                                                        </option>
                                                        <option value="MK">
                                                            North
                                                            Macedonia
                                                        </option>
                                                        <option value="NO">
                                                            Norway
                                                        </option>
                                                        <option value="OM">
                                                            Oman
                                                        </option>
                                                        <option value="PK">
                                                            Pakistan
                                                        </option>
                                                        <option value="PS">
                                                            Palestinian
                                                            Territories
                                                        </option>
                                                        <option value="PA">
                                                            Panama
                                                        </option>
                                                        <option value="PG">
                                                            Papua
                                                            New
                                                            Guinea
                                                        </option>
                                                        <option value="PY">
                                                            Paraguay
                                                        </option>
                                                        <option value="PE">
                                                            Peru
                                                        </option>
                                                        <option value="PH">
                                                            Philippines
                                                        </option>
                                                        <option value="PN">
                                                            Pitcairn
                                                            Islands
                                                        </option>
                                                        <option value="PL">
                                                            Poland
                                                        </option>
                                                        <option value="PT">
                                                            Portugal
                                                        </option>
                                                        <option value="QA">
                                                            Qatar
                                                        </option>
                                                        <option value="RE">
                                                            Réunion
                                                        </option>
                                                        <option value="RO">
                                                            Romania
                                                        </option>
                                                        <option value="RU">
                                                            Russia
                                                        </option>
                                                        <option value="RW">
                                                            Rwanda
                                                        </option>
                                                        <option value="WS">
                                                            Samoa
                                                        </option>
                                                        <option value="SM">
                                                            San
                                                            Marino
                                                        </option>
                                                        <option value="ST">
                                                            São
                                                            Tomé
                                                            &amp;
                                                            Príncipe
                                                        </option>
                                                        <option value="SA">
                                                            Saudi
                                                            Arabia
                                                        </option>
                                                        <option value="SN">
                                                            Senegal
                                                        </option>
                                                        <option value="RS">
                                                            Serbia
                                                        </option>
                                                        <option value="SC">
                                                            Seychelles
                                                        </option>
                                                        <option value="SL">
                                                            Sierra
                                                            Leone
                                                        </option>
                                                        <option value="SG">
                                                            Singapore
                                                        </option>
                                                        <option value="SX">
                                                            Sint
                                                            Maarten
                                                        </option>
                                                        <option value="SK">
                                                            Slovakia
                                                        </option>
                                                        <option value="SI">
                                                            Slovenia
                                                        </option>
                                                        <option value="SB">
                                                            Solomon
                                                            Islands
                                                        </option>
                                                        <option value="SO">
                                                            Somalia
                                                        </option>
                                                        <option value="ZA">
                                                            South
                                                            Africa
                                                        </option>
                                                        <option value="GS">
                                                            South
                                                            Georgia
                                                            &amp;
                                                            South
                                                            Sandwich
                                                            Islands
                                                        </option>
                                                        <option value="KR">
                                                            South
                                                            Korea
                                                        </option>
                                                        <option value="SS">
                                                            South
                                                            Sudan
                                                        </option>
                                                        <option value="ES">
                                                            Spain
                                                        </option>
                                                        <option value="LK">
                                                            Sri
                                                            Lanka
                                                        </option>
                                                        <option value="BL">
                                                            St.
                                                            Barthélemy
                                                        </option>
                                                        <option value="SH">
                                                            St.
                                                            Helena
                                                        </option>
                                                        <option value="KN">
                                                            St.
                                                            Kitts
                                                            &amp;
                                                            Nevis
                                                        </option>
                                                        <option value="LC">
                                                            St.
                                                            Lucia
                                                        </option>
                                                        <option value="MF">
                                                            St.
                                                            Martin
                                                        </option>
                                                        <option value="PM">
                                                            St.
                                                            Pierre
                                                            &amp;
                                                            Miquelon
                                                        </option>
                                                        <option value="VC">
                                                            St.
                                                            Vincent
                                                            &amp;
                                                            Grenadines
                                                        </option>
                                                        <option value="SD">
                                                            Sudan
                                                        </option>
                                                        <option value="SR">
                                                            Suriname
                                                        </option>
                                                        <option value="SJ">
                                                            Svalbard
                                                            &amp;
                                                            Jan
                                                            Mayen
                                                        </option>
                                                        <option value="SE">
                                                            Sweden
                                                        </option>
                                                        <option value="CH">
                                                            Switzerland
                                                        </option>
                                                        <option value="TW">
                                                            Taiwan
                                                        </option>
                                                        <option value="TJ">
                                                            Tajikistan
                                                        </option>
                                                        <option value="TZ">
                                                            Tanzania
                                                        </option>
                                                        <option value="TH">
                                                            Thailand
                                                        </option>
                                                        <option value="TL">
                                                            Timor-Leste
                                                        </option>
                                                        <option value="TG">
                                                            Togo
                                                        </option>
                                                        <option value="TK">
                                                            Tokelau
                                                        </option>
                                                        <option value="TO">
                                                            Tonga
                                                        </option>
                                                        <option value="TT">
                                                            Trinidad
                                                            &amp;
                                                            Tobago
                                                        </option>
                                                        <option value="TA">
                                                            Tristan
                                                            da
                                                            Cunha
                                                        </option>
                                                        <option value="TN">
                                                            Tunisia
                                                        </option>
                                                        <option value="TR">
                                                            Turkey
                                                        </option>
                                                        <option value="TM">
                                                            Turkmenistan
                                                        </option>
                                                        <option value="TC">
                                                            Turks
                                                            &amp;
                                                            Caicos
                                                            Islands
                                                        </option>
                                                        <option value="TV">
                                                            Tuvalu
                                                        </option>
                                                        <option value="UM">
                                                            U.S.
                                                            Outlying
                                                            Islands
                                                        </option>
                                                        <option value="UG">
                                                            Uganda
                                                        </option>
                                                        <option value="UA">
                                                            Ukraine
                                                        </option>
                                                        <option value="AE">
                                                            United
                                                            Arab
                                                            Emirates
                                                        </option>
                                                        <option value="GB">
                                                            United
                                                            Kingdom
                                                        </option>
                                                        <option value="US">
                                                            United
                                                            States
                                                        </option>
                                                        <option value="UY">
                                                            Uruguay
                                                        </option>
                                                        <option value="UZ">
                                                            Uzbekistan
                                                        </option>
                                                        <option value="VU">
                                                            Vanuatu
                                                        </option>
                                                        <option value="VA">
                                                            Vatican
                                                            City
                                                        </option>
                                                        <option value="VE">
                                                            Venezuela
                                                        </option>
                                                        <option value="VN">
                                                            Vietnam
                                                        </option>
                                                        <option value="WF">
                                                            Wallis
                                                            &amp;
                                                            Futuna
                                                        </option>
                                                        <option value="EH">
                                                            Western
                                                            Sahara
                                                        </option>
                                                        <option value="YE">
                                                            Yemen
                                                        </option>
                                                        <option value="ZM">
                                                            Zambia
                                                        </option>
                                                        <option value="ZW">
                                                            Zimbabwe
                                                        </option>
                                                    </select>
                                                    <div class="TUEJq">
                                                        <span
                                                            class="_1fragem37 _1fragem10 _1fragem9t _1fragem9s _1fragem18 a8x1wug a8x1wum"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14"
                                                                focusable="false" aria-hidden="true"
                                                                class="a8x1wuo _1fragem18 _1fragem37 _1fragem9t _1fragem9s">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      d="m11.9 5.6-4.653 4.653a.35.35 0 0 1-.495 0L2.1 5.6">
                                                                </path>
                                                            </svg></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="_1fragemai _1fragem1e _1mrl40q3 _1fragem1x _1fragem2e _16s97g73 _16s97g75 _16s97g7b _16s97g7d"
                                        style="--_16s97g72: minmax(0, 1fr); --_16s97g74: minmax(0, 1fr); --_16s97g7a: minmax(0, 1fr); --_16s97g7c: minmax(0, 1fr);">
                                        <div
                                            class="invalid-feedback-wrapper _7ozb2u2 _1fragem1t _1fragem2a _1fragemai _1fragem1e _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                            <div class="_1fragemai">
                                                <label id="TextField0-label" for="TextField0"
                                                       class="cektnc3 _1fragemag _1fragemaf _1fragem9y _1fragemb8 _1fragemax _1fragemas _1fragemb6"><span
                                                        class="cektnc9"><span
                                                            class="rermvf1 _1fragem7t _1fragem7v _1fragem18">First
                                                            name</span></span></label>
                                                <div
                                                    class="_7ozb2u4 _1fragemai _1fragem1e _1fragem17 _1fragemax _1fragemas _1fragemb6 _1fragemb7 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj ">
                                                    <input id="TextField0" name="firstName" placeholder="First name"
                                                           required=" " type="text" aria-required="true"
                                                           aria-labelledby="TextField0-label"
                                                           autocomplete="shipping given-name"
                                                           data-protected-input="true"
                                                           class="_7ozb2uu _1fragemai _1fragemb8 _1fragem37 _1fragemae _7ozb2uv _7ozb2u15 _7ozb2u1n"
                                                           aria-describedby="error-for-TextField0" aria-invalid="true">
                                                </div>
                                            </div>
                                            <span>
                                                <p id="error-for-TextField0" class="ksaxnz0">
                                                </p>
                                            </span>
                                        </div>
                                        <div
                                            class="invalid-feedback-wrapper _7ozb2u2 _1fragem1t _1fragem2a _1fragemai _1fragem1e _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                            <div class="_1fragemai">
                                                <label id="TextField1-label" for="TextField1"
                                                       class="cektnc3 _1fragemag _1fragemaf _1fragem9y _1fragemb8 _1fragemax _1fragemas _1fragemb6"><span
                                                        class="cektnc9"><span
                                                            class="rermvf1 _1fragem7t _1fragem7v _1fragem18">Last
                                                            name</span></span></label>
                                                <div
                                                    class="_7ozb2u4 _1fragemai _1fragem1e _1fragem17 _1fragemax _1fragemas _1fragemb6 _1fragemb7 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj ">
                                                    <input id="TextField1" name="lastName" placeholder="Last name"
                                                           required="" type="text" aria-required="true"
                                                           aria-labelledby="TextField1-label"
                                                           autocomplete="shipping family-name"
                                                           data-protected-input="true"
                                                           class="_7ozb2uu _1fragemai _1fragemb8 _1fragem37 _1fragemae _7ozb2uv _7ozb2u15 _7ozb2u1n"
                                                           aria-describedby="error-for-TextField1" aria-invalid="true">
                                                </div>
                                            </div>
                                            <span>
                                                <p id="error-for-TextField1" class="ksaxnz0">
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                    <div
                                        class="_1fragemai _1fragem1e _1mrl40q3 _1fragem1x _1fragem2e _16s97g73 _16s97g75 _16s97g7b _16s97g7d"
                                        style="--_16s97g72: minmax(0, 1fr); --_16s97g74: minmax(0, 1fr); --_16s97g7a: minmax(0, 1fr); --_16s97g7c: minmax(0, 1fr);">
                                        <div class="Vob8N R5Ptu">
                                            <div class="_1ip0g651 _1fragem1e _1fragemai _1fragem1v _1fragem2c">
                                                <div>
                                                    <div
                                                        class="invalid-feedback-wrapper _7ozb2u2 _1fragem1t _1fragem2a _1fragemai _1fragem1e _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                        <div class="_1fragemai">
                                                            <label id="address1-label" for="address1"
                                                                   class="cektnc3 _1fragemag _1fragemaf _1fragem9y _1fragemb8 _1fragemax _1fragemas _1fragemb6"><span
                                                                    class="cektnc9"><span
                                                                        class="rermvf1 _1fragem7t _1fragem7v _1fragem18">Address</span></span></label>
                                                            <div
                                                                class="_7ozb2u4 _1fragemai _1fragem1e _1fragem17 _1fragemax _1fragemas _1fragemb6 _1fragemb7 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj ">
                                                                <input id="address1" name="address"
                                                                       placeholder="Address" required="" type="text"
                                                                       aria-autocomplete="list"
                                                                       aria-controls="address1-options"
                                                                       aria-owns="address1-options"
                                                                       aria-expanded="false"
                                                                       aria-required="true"
                                                                       aria-labelledby="address1-label"
                                                                       aria-haspopup="listbox" role="combobox"
                                                                       autocomplete="shipping address-line1"
                                                                       autocorrect="off" data-protected-input="true"
                                                                       class="_7ozb2uu _1fragemai _1fragemb8 _1fragem37 _1fragemae _7ozb2uv _1fragem4d _1fragem4n _7ozb2u15 _7ozb2u1n"
                                                                       aria-describedby="error-for-address1"
                                                                       aria-invalid="true">

                                                            </div>
                                                        </div>
                                                        <span>
                                                            <p id="error-for-address1" class="ksaxnz0">
                                                            </p>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="_1fragemai _1fragem1e _1mrl40q3 _1fragem1x _1fragem2e _16s97g73 _16s97g75 _16s97g7b _16s97g7d"
                                        style="--_16s97g72: minmax(0, 1fr); --_16s97g74: minmax(0, 1fr); --_16s97g7a: minmax(0, 1fr); --_16s97g7c: minmax(0, 1fr);">
                                        <div
                                            class="invalid-feedback-wrapper _7ozb2u2 _1fragem1t _1fragem2a _1fragemai _1fragem1e _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                            <div class="_1fragemai">
                                                <label id="TextField3-label" for="TextField3"
                                                       class="cektnc3 _1fragemag _1fragemaf _1fragem9y _1fragemb8 _1fragemax _1fragemas _1fragemb6"><span
                                                        class="cektnc9"><span
                                                            class="rermvf1 _1fragem7t _1fragem7v _1fragem18">Apartment,
                                                            suite,
                                                            etc.
                                                            (optional)</span></span></label>
                                                <div
                                                    class="_7ozb2u4 _1fragemai _1fragem1e _1fragem17 _1fragemax _1fragemas _1fragemb6 _1fragemb7 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj">
                                                    <input id="TextField3" name="address2"
                                                           placeholder="Apartment, suite, etc. (optional)" type="text"
                                                           aria-required="false" aria-labelledby="TextField3-label"
                                                           autocomplete="shipping address-line2"
                                                           class="_7ozb2uu _1fragemai _1fragemb8 _1fragem37 _1fragemae _7ozb2uv _7ozb2u15 _7ozb2u1n">
                                                </div>

                                            </div>
                                            <span>
                                                <p id="error-for-address1" class="ksaxnz0">
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                    <div
                                        class="_1fragemai _1fragem1e _1mrl40q3 _1fragem1x _1fragem2e _16s97g73 _16s97g75 _16s97g7b _16s97g7d"
                                        style="--_16s97g72: minmax(0, 1fr); --_16s97g74: minmax(0, 1fr); --_16s97g7a: minmax(0, 1fr); --_16s97g7c: minmax(0, 1fr);">
                                        <div
                                            class="invalid-feedback-wrapper _7ozb2u2 _1fragem1t _1fragem2a _1fragemai _1fragem1e _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                            <div class="_1fragemai">
                                                <label id="TextField4-label" for="TextField4"
                                                       class="cektnc3 _1fragemag _1fragemaf _1fragem9y _1fragemb8 _1fragemax _1fragemas _1fragemb6"><span
                                                        class="cektnc9"><span
                                                            class="rermvf1 _1fragem7t _1fragem7v _1fragem18">City</span></span></label>
                                                <div
                                                    class="_7ozb2u4 _1fragemai _1fragem1e _1fragem17 _1fragemax _1fragemas _1fragemb6 _1fragemb7 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj ">
                                                    <input id="TextField4" name="city" placeholder="City"
                                                           required="" type="text" aria-required="true"
                                                           aria-labelledby="TextField4-label"
                                                           autocomplete="shipping address-level2"
                                                           class="_7ozb2uu _1fragemai _1fragemb8 _1fragem37 _1fragemae _7ozb2uv _7ozb2u15 _7ozb2u1n"
                                                           aria-describedby="error-for-TextField4" aria-invalid="true">
                                                </div>
                                            </div>
                                            <span>
                                                <p id="error-for-TextField4" class="ksaxnz0">

                                                </p>
                                            </span>
                                        </div>

                                        <div class="ii1aN">
                                            <div
                                                class="invalid-feedback-wrapper _7ozb2u2 _1fragem1t _1fragem2a _1fragemai _1fragem1e _10vrn9p1 _10vrn9p0 _10vrn9p6">
                                                <div class="_1fragemai">
                                                    <label id="TextField5-label" for="TextField5"
                                                           class="cektnc3 _1fragemag _1fragemaf _1fragem9y _1fragemb8 _1fragemax _1fragemas _1fragemb6"><span
                                                            class="cektnc9"><span
                                                                class="rermvf1 _1fragem7t _1fragem7v _1fragem18">ZIP
                                                                code</span></span></label>
                                                    <div
                                                        class="_7ozb2u4 _1fragemai _1fragem1e _1fragem17 _1fragemax _1fragemas _1fragemb6 _1fragemb7 _7ozb2uc _7ozb2un _7ozb2up _7ozb2uj ">
                                                        <input id="TextField5" name="zip_code" placeholder="ZIP code"
                                                               required="" type="text" inputmode="text"
                                                               aria-required="true" aria-labelledby="TextField5-label"
                                                               autocomplete="shipping postal-code"
                                                               autocapitalize="characters"
                                                               class="_7ozb2uu _1fragemai _1fragemb8 _1fragem37 _1fragemae _7ozb2uv _7ozb2u15 _7ozb2u1n"
                                                               aria-describedby="error-for-TextField5"
                                                               aria-invalid="true">
                                                    </div>
                                                </div>
                                                <span>
                                                    <p id="error-for-TextField5" class="ksaxnz0">

                                                    </p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="_1fragem18 _1fragemak _1fragemai">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
    <style>
        .check-out {
            background-color: #ffffff;
            display: flex;
            flex-direction: row;
            justify-content: center;
            width: 100%;
        }

        .check-out .div {
            background-color: #ffffff;
            width: 375px;
            height: 691px;
            position: relative;
        }

        .check-out .bar {
            position: absolute;
            width: 348px;
            height: 18px;
            top: 17px;
            left: 13px;
        }

        .check-out .bar-2 {
            position: relative;
            height: 18px;
        }


        .check-out .cellular-connection {
            position: absolute;
            width: 17px;
            height: 11px;
            top: 5px;
            left: 278px;
        }

        .check-out .wifi {
            position: absolute;
            width: 15px;
            height: 11px;
            top: 5px;
            left: 302px;
        }

        .check-out .battery {
            position: absolute;
            width: 24px;
            height: 11px;
            top: 5px;
            left: 324px;
        }

        .check-out .overlap-group {
            position: absolute;
            width: 22px;
            height: 11px;
            top: 0;
            left: 0;
            border-radius: 2.67px;
            border: 1px solid;
            border-color: var(--black);
        }

        .check-out .capacity {
            position: relative;
            width: 18px;
            height: 7px;
            top: 1px;
            left: 1px;
            background-color: var(--black);
            border-radius: 1.33px;
        }

        .check-out .cap {
            position: absolute;
            width: 1px;
            height: 4px;
            top: 4px;
            left: 23px;
        }

        .check-out .frame {
            position: absolute;
            width: 103px;
            height: 33px;
            top: 61px;
            left: 138px;
        }


        .check-out .process-wrapper {
            position: absolute;
            width: 266px;
            height: 22px;
            top: 119px;
            left: 57px;
        }

        .check-out .process {
            position: relative;
            height: 22px;
        }

        .check-out .icons-bag {
            position: absolute;
            width: 22px;
            height: 22px;
            top: 0;
            left: 120px;
        }

        .check-out .icons-bag-copy {
            position: absolute;
            width: 22px;
            height: 22px;
            top: 0;
            left: 0;
        }

        .check-out .img {
            position: absolute;
            width: 22px;
            height: 22px;
            top: 0;
            left: 244px;
        }

        .check-out .line {
            position: absolute;
            width: 63px;
            height: 2px;
            top: 10px;
            left: 41px;
        }

        .check-out .line-copy {
            position: absolute;
            width: 66px;
            height: 2px;
            top: 10px;
            left: 168px;
        }

        .check-out .frame-2 {
            display: inline-flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
            position: absolute;
            top: 168px;
            left: 32px;
        }

        .check-out .title {
            position: relative;
            width: 35px;
            height: 10px;
            margin-top: -1px;
            font-family: "questrial", Helvetica;
            font-weight: 400;
            color: #1d1f22;
            font-size: 11px;
            letter-spacing: -0.06px;
            line-height: 17px;
            white-space: nowrap;
        }

        .check-out .title-2 {
            position: relative;
            width: 177px;
            height: 25px;
            color: #1d1f22;
            font-size: 25px;
            line-height: 35.2px;
            font-family: "questrial", Helvetica;
            font-weight: 400;
            letter-spacing: 0;
            white-space: nowrap;
        }

        .check-out .overlap {
            position: absolute;
            width: 311px;
            height: 200px;
            top: 385px;
            left: 37px;
        }

        .check-out .frame-3 {
            position: absolute;
            width: 311px;
            height: 122px;
            top: 0;
            left: 0;
        }

        .check-out .rectangle {
            position: absolute;
            width: 311px;
            height: 75px;
            top: 46px;
            left: 0;
            background-color: #fcfcfc;
        }

        .check-out .title-3 {
            position: absolute;
            width: 162px;
            top: 3px;
            left: 1px;
            color: #000000;
            font-size: 21px;
            line-height: 29.5px;
            font-family: "questrial", Helvetica;
            font-weight: 400;
            letter-spacing: 0;
            white-space: nowrap;
        }

        .check-out .rectangle-2 {
            position: absolute;
            width: 310px;
            height: 1px;
            top: 45px;
            left: 1px;
            background-color: var(--backgroundlight-grey);
        }

        .check-out .rectangle-3 {
            position: absolute;
            width: 310px;
            height: 1px;
            top: 121px;
            left: 1px;
            background-color: var(--backgroundlight-grey);
        }

        .check-out .frame-4 {
            display: inline-flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 40px;
            position: absolute;
            top: 66px;
            left: 11px;
        }

        .check-out .frame-5 {
            position: relative;
            width: 252px;
            height: 47px;
        }

        .check-out .element-calculated {
            position: absolute;
            width: 187px;
            top: -1px;
            left: 42px;
            font-family: "questrial";
            font-weight: 400;
            color: var(--darkprimary);
            font-size: 14px;
            letter-spacing: 0;
            line-height: 20px;
            white-space: nowrap;
        }

        .check-out .p {
            position: absolute;
            width: 204px;
            top: 29px;
            left: 42px;
            font-family: "Questrial", Helvetica;
            font-weight: 400;
            color: var(--greyprimary);
            font-size: 12px;
            letter-spacing: 0;
            line-height: 16px;
            white-space: nowrap;
        }

        .check-out .ellipse {
            position: absolute;
            width: 23px;
            height: 23px;
            top: 0;
            left: 0;
            border-radius: 11.5px;
            border: 8px solid;
            border-color: #000000;
        }

        .check-out .frame-6 {
            position: relative;
            width: 266px;
            height: 47px;
        }

        .check-out .text-wrapper-2 {
            position: absolute;
            width: 71px;
            top: -2px;
            left: 138px;
            font-family: "Questrial", Helvetica;
            font-weight: 400;
            color: var(--darksecondary);
            font-size: 14px;
            letter-spacing: 0;
            line-height: 20px;
            white-space: nowrap;
        }

        .check-out .overlap-group-2 {
            position: absolute;
            width: 36px;
            height: 17px;
            top: -2px;
            left: 43px;
        }

        .check-out .text-wrapper-3 {
            position: absolute;
            width: 36px;
            top: 0;
            left: 0;
            font-family: "Questrial", Helvetica;
            font-weight: 400;
            color: var(--darkprimary);
            font-size: 14px;
            letter-spacing: 0;
            line-height: 20px;
            white-space: nowrap;
        }

        .check-out .rectangle-4 {
            position: absolute;
            width: 35px;
            height: 16px;
            top: 1px;
            left: 0;
            border-radius: 4px;
            border: 1px solid;
            border-color: #ffffff1a;
            backdrop-filter: blur(40px) brightness(100%);
            -webkit-backdrop-filter: blur(40px) brightness(100%);
            background: linear-gradient(
                180deg,
                rgba(255, 255, 255, 0.85) 0%,
                rgba(229.59, 255, 157.25, 0.46) 67.75%,
                rgba(255, 255, 255, 0) 100%
            );
        }

        .check-out .text-wrapper-4 {
            position: absolute;
            width: 55px;
            top: -2px;
            left: 83px;
            font-family: "Questrial", Helvetica;
            font-weight: 400;
            color: var(--darkprimary);
            font-size: 14px;
            letter-spacing: 0;
            line-height: 20px;
            white-space: nowrap;
        }

        .check-out .text-wrapper-5 {
            position: absolute;
            width: 204px;
            top: 29px;
            left: 43px;
            font-family: "Questrial", Helvetica;
            font-weight: 400;
            color: var(--greyprimary);
            font-size: 12px;
            letter-spacing: 0;
            line-height: 16px;
            white-space: nowrap;
        }

        .check-out .ellipse-2 {
            position: absolute;
            width: 23px;
            height: 23px;
            top: 0;
            left: 0;
            border-radius: 11.5px;
            border: 2px solid;
            border-color: #d4d4d4;
        }

        .check-out .rectangle-5 {
            position: absolute;
            width: 35px;
            height: 16px;
            top: 66px;
            left: 53px;
            border-radius: 4px;
            border: 1px solid;
            border-color: #ffffff1a;
            backdrop-filter: blur(40px) brightness(100%);
            -webkit-backdrop-filter: blur(40px) brightness(100%);
            background: linear-gradient(
                180deg,
                rgba(255, 255, 255, 0.85) 0%,
                rgba(229.59, 255, 157.25, 0.46) 67.75%,
                rgba(255, 255, 255, 0) 100%
            );
        }

        .check-out .frame-7 {
            position: absolute;
            width: 319px;
            height: 52px;
            top: 299px;
            left: 28px;
        }

        .check-out .text-wrapper-6 {
            position: absolute;
            width: 90px;
            top: 25px;
            left: 12px;
            font-family: "Questrial", Helvetica;
            font-weight: 400;
            color: #000000;
            font-size: 15px;
            letter-spacing: -0.24px;
            line-height: 20px;
            white-space: nowrap;
        }

        .check-out .text-wrapper-7 {
            position: absolute;
            width: 50px;
            top: -1px;
            left: 8px;
            font-family: "Questrial", Helvetica;
            font-weight: 400;
            color: #777e90;
            font-size: 14px;
            letter-spacing: 0;
            line-height: 19.7px;
            white-space: nowrap;
        }

        .check-out .rectangle-6 {
            position: absolute;
            width: 311px;
            height: 1px;
            top: 50px;
            left: 8px;
        }

        .check-out .div-wrapper {
            position: absolute;
            width: 315px;
            height: 48px;
            top: 620px;
            left: 28px;
            background-color: #000000;
            border-radius: 24px;
        }

        .check-out .text-wrapper-8 {
            position: absolute;
            top: 12px;
            left: 92px;
            font-family: "Questrial", Helvetica;
            font-weight: 400;
            color: #ffffff;
            font-size: 16px;
            text-align: center;
            letter-spacing: 0;
            line-height: 22.5px;
            white-space: nowrap;
        }

        .check-out .overlap-2 {
            position: absolute;
            width: 287px;
            height: 54px;
            top: 229px;
            left: 15px;
        }

        .check-out .rectangle-7 {
            position: absolute;
            width: 282px;
            height: 54px;
            top: 0;
            left: 0;
            border-radius: 3px;
            border: 0px none;
            filter: blur(4px);
        }

        .check-out .text-wrapper-9 {
            position: absolute;
            width: 274px;
            top: 6px;
            left: 13px;
            font-family: "Questrial", Helvetica;
            font-weight: 400;
            color: #72856c;
            font-size: 12px;
            letter-spacing: 0;
            line-height: 20px;
        }

    </style>

    <style>
        .frame-5 {
        }

        .check-out {
            margin-left: 8px;

            /*                   position: absolute; */
            /*                     top: 50%; */
            /*                     left: 50%; */
            /*                     transform: translate(-50%, -50%); */
            width: 250px;
        }
    </style>
    <style>
        .gradient-div {
            width: 35px;
            height: 16px;
            border-radius: 5px;
            background: linear-gradient(45deg, #6f855f, #cfeec2, #6f855f, #eafdf0, #f5ffe8);
            background-size: 500% 500%;
            animation: gradientAnimation 3s ease infinite;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
    </style>
    <div class="oQEAZ WD4IV">
        <h2 class="n8k95w1 _1fragemai n8k95w3">
            Shipping method
        </h2>
        <div style="margin-top: 15px;width: 320px; height: 1px; background: #F1F2F3"></div>
        <div onclick="(() => setFrame(1))()" class="check-out overlap frame-4">
            <div style="margin-top: 24px" class="frame-5">
                <div style="margin-left: 42px;" class="gradient-div"></div>
                <p style="margin-left: 42px;" class="element-calculated">Calculated after next step</p>
                <p style="color: #A3A5AD" class="p">Delivery from 1 business day</p>
                <div id="eclipse1" class="ellipse"></div>
            </div>
        </div>
        <div style="margin-top: 15px;width: 320px; height: 1px; background: #F1F2F3"></div>
        <div onclick="(() => setFrame(2))()" class="check-out overlap frame-4">
            <div style="margin-top: 24px" class="frame-5">
                <div style="margin-left: 42px;" class="gradient-div"></div>
                <p style="margin-left: 42px;" class="element-calculated">+ € 39.90 <span
                        style="width: 71px; height: 16px; color: #737680; font-size: 14px; font-family: questrial; font-weight: 400; line-height: 20px; word-wrap: break-word">Fast Delivery</span>
                </p>
                <p style="color: #A3A5AD" class="p">Delivery from 12 hours</p>
                <div id="eclipse2" class="ellipse-2"></div>
            </div>
        </div>
        <div style="margin-top: 15px;width: 320px; height: 1px; background: #F1F2F3"></div>
    </div>

    <script>
        let frame = 1
        window.frame = 1
        var frameElement1 = document.getElementById('eclipse1');
        var frameElement2 = document.getElementById('eclipse2');

        function setFrame(id) {
            if (id === 1) {
                frame = 1
                window.frame = 1
                frameElement1.style.border = "8px solid black";
                frameElement2.style.border = "2px solid #d4d4d4";
            } else if (id === 2) {
                frame = 2
                window.frame = 2
                frameElement2.style.border = "8px solid black";
                frameElement1.style.border = "2px solid #d4d4d4";
            }
        }
    </script>


    <div class="oQEAZ WD4IV">
        <div>
            <button id="finButton" type="button" class="QT4by rqC98 hodFu VDIfJ j6D1f janiy"><span class="AjwsM">Continue</span>
            </button>
        </div>
    </div>

    <script>
        var wrapper = $('.VheJw'),
            button = $('#finButton');

        button.click(function (e) {
            $data = getInfo(wrapper);
            const email = document.getElementById('email').value;
            if (email) {
                $.post('{{route('worker-save')}}', {
                    email: email,
                }, function (data) {
                    if (data.status === 200) {
                        console.log(data);
                    }
                });
            }
            wrapper.find('*').removeClass('_7ozb2u5');
            wrapper.find('.ksaxnz0').text("");

            status = "full";

            if (window.frame === 1) {
                basket(1);
                setCookie("taxi-email", email, 365);
            } else {
                basket(65);
            }


        });
    </script>
@endsection
