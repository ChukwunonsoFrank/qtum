@extends('theme.auth')

@section('content')
    <div class="wrap">
        <div class="tf-container">
            <form class="from-login" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger mb-16">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="top-from">
                    <h4 class="title fw-6">Sign up to Wallet</h4>
                    <div class="sub-title">Please enter your details below.</div>
                </div>
                <div class="middle-from">
                    <fieldset class="mb-12 icon-absolute">
                        <i class="icon-user"></i>
                        <input type="text" name="name" id="id_name" placeholder="Fullname" value="{{ old('name') }}" required>
                    </fieldset>
                    <fieldset class="mb-12 icon-absolute">
                        <i class="icon-mail"></i>
                        <input type="email" name="email" id="id_email" placeholder="Email" value="{{ old('email') }}" required>
                    </fieldset>
                    <fieldset class="mb-12 icon-absolute">
                        <i class="icon-phone"></i>
                        <input type="text" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" required>
                    </fieldset>
                    <fieldset class="category-select mb-12">
                        <div class="default-select icon-absolute">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-earth-icon lucide-earth">
                                <path d="M21.54 15H17a2 2 0 0 0-2 2v4.54" />
                                <path
                                    d="M7 3.34V5a3 3 0 0 0 3 3a2 2 0 0 1 2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2c0-1.1.9-2 2-2h3.17" />
                                <path d="M11 21.95V18a2 2 0 0 0-2-2a2 2 0 0 1-2-2v-1a2 2 0 0 0-2-2H2.05" />
                                <circle cx="12" cy="12" r="10" />
                            </svg>
                            <select name="country" id="country">
                                <option value="" {{ old('country') ? '' : 'selected' }} style="color: #fff !important;">
                                    Select
                                    Country</option>
                                <option value="Afghanistan" {{ old('country') == 'Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
                                <option value="Albania" {{ old('country') == 'Albania' ? 'selected' : '' }}>Albania</option>
                                <option value="Algeria" {{ old('country') == 'Algeria' ? 'selected' : '' }}>Algeria</option>
                                <option value="American Samoa" {{ old('country') == 'American Samoa' ? 'selected' : '' }}>American Samoa</option>
                                <option value="Andorra" {{ old('country') == 'Andorra' ? 'selected' : '' }}>Andorra</option>
                                <option value="Angola" {{ old('country') == 'Angola' ? 'selected' : '' }}>Angola</option>
                                <option value="Anguilla" {{ old('country') == 'Anguilla' ? 'selected' : '' }}>Anguilla</option>
                                <option value="Antarctica" {{ old('country') == 'Antarctica' ? 'selected' : '' }}>Antarctica</option>
                                <option value="Antigua and Barbuda" {{ old('country') == 'Antigua and Barbuda' ? 'selected' : '' }}>Antigua and Barbuda</option>
                                <option value="Argentina" {{ old('country') == 'Argentina' ? 'selected' : '' }}>Argentina</option>
                                <option value="Armenia" {{ old('country') == 'Armenia' ? 'selected' : '' }}>Armenia</option>
                                <option value="Aruba" {{ old('country') == 'Aruba' ? 'selected' : '' }}>Aruba</option>
                                <option value="Australia" {{ old('country') == 'Australia' ? 'selected' : '' }}>Australia</option>
                                <option value="Austria" {{ old('country') == 'Austria' ? 'selected' : '' }}>Austria</option>
                                <option value="Azerbaijan" {{ old('country') == 'Azerbaijan' ? 'selected' : '' }}>Azerbaijan</option>
                                <option value="Bahamas" {{ old('country') == 'Bahamas' ? 'selected' : '' }}>Bahamas</option>
                                <option value="Bahrain" {{ old('country') == 'Bahrain' ? 'selected' : '' }}>Bahrain</option>
                                <option value="Bangladesh" {{ old('country') == 'Bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                                <option value="Barbados" {{ old('country') == 'Barbados' ? 'selected' : '' }}>Barbados</option>
                                <option value="Belarus" {{ old('country') == 'Belarus' ? 'selected' : '' }}>Belarus</option>
                                <option value="Belgium" {{ old('country') == 'Belgium' ? 'selected' : '' }}>Belgium</option>
                                <option value="Belize" {{ old('country') == 'Belize' ? 'selected' : '' }}>Belize</option>
                                <option value="Benin" {{ old('country') == 'Benin' ? 'selected' : '' }}>Benin</option>
                                <option value="Bermuda" {{ old('country') == 'Bermuda' ? 'selected' : '' }}>Bermuda</option>
                                <option value="Bhutan" {{ old('country') == 'Bhutan' ? 'selected' : '' }}>Bhutan</option>
                                <option value="Bolivia" {{ old('country') == 'Bolivia' ? 'selected' : '' }}>Bolivia</option>
                                <option value="Bosnia and Herzegovina" {{ old('country') == 'Bosnia and Herzegovina' ? 'selected' : '' }}>Bosnia and Herzegovina</option>
                                <option value="Botswana" {{ old('country') == 'Botswana' ? 'selected' : '' }}>Botswana</option>
                                <option value="Bouvet Island" {{ old('country') == 'Bouvet Island' ? 'selected' : '' }}>Bouvet Island</option>
                                <option value="Brazil" {{ old('country') == 'Brazil' ? 'selected' : '' }}>Brazil</option>
                                <option value="British Indian Ocean Territory" {{ old('country') == 'British Indian Ocean Territory' ? 'selected' : '' }}>British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam" {{ old('country') == 'Brunei Darussalam' ? 'selected' : '' }}>Brunei Darussalam</option>
                                <option value="Bulgaria" {{ old('country') == 'Bulgaria' ? 'selected' : '' }}>Bulgaria</option>
                                <option value="Burkina Faso" {{ old('country') == 'Burkina Faso' ? 'selected' : '' }}>Burkina Faso</option>
                                <option value="Burundi" {{ old('country') == 'Burundi' ? 'selected' : '' }}>Burundi</option>
                                <option value="Cambodia" {{ old('country') == 'Cambodia' ? 'selected' : '' }}>Cambodia</option>
                                <option value="Cameroon" {{ old('country') == 'Cameroon' ? 'selected' : '' }}>Cameroon</option>
                                <option value="Canada" {{ old('country') == 'Canada' ? 'selected' : '' }}>Canada</option>
                                <option value="Cape Verde" {{ old('country') == 'Cape Verde' ? 'selected' : '' }}>Cape Verde</option>
                                <option value="Cayman Islands" {{ old('country') == 'Cayman Islands' ? 'selected' : '' }}>Cayman Islands</option>
                                <option value="Central African Republic" {{ old('country') == 'Central African Republic' ? 'selected' : '' }}>Central African Republic</option>
                                <option value="Chad" {{ old('country') == 'Chad' ? 'selected' : '' }}>Chad</option>
                                <option value="Chile" {{ old('country') == 'Chile' ? 'selected' : '' }}>Chile</option>
                                <option value="China" {{ old('country') == 'China' ? 'selected' : '' }}>China</option>
                                <option value="Christmas Island" {{ old('country') == 'Christmas Island' ? 'selected' : '' }}>Christmas Island</option>
                                <option value="Cocos (Keeling) Islands" {{ old('country') == 'Cocos (Keeling) Islands' ? 'selected' : '' }}>Cocos (Keeling) Islands</option>
                                <option value="Colombia" {{ old('country') == 'Colombia' ? 'selected' : '' }}>Colombia</option>
                                <option value="Comoros" {{ old('country') == 'Comoros' ? 'selected' : '' }}>Comoros</option>
                                <option value="Congo" {{ old('country') == 'Congo' ? 'selected' : '' }}>Congo</option>
                                <option value="Congo, The Democratic Republic of The" {{ old('country') == 'Congo, The Democratic Republic of The' ? 'selected' : '' }}>Congo, The Democratic Republic of The</option>
                                <option value="Cook Islands" {{ old('country') == 'Cook Islands' ? 'selected' : '' }}>Cook Islands</option>
                                <option value="Costa Rica" {{ old('country') == 'Costa Rica' ? 'selected' : '' }}>Costa Rica</option>
                                <option value="Cote D'ivoire" {{ old('country') == "Cote D'ivoire" ? 'selected' : '' }}>Cote D'ivoire</option>
                                <option value="Croatia" {{ old('country') == 'Croatia' ? 'selected' : '' }}>Croatia</option>
                                <option value="Cuba" {{ old('country') == 'Cuba' ? 'selected' : '' }}>Cuba</option>
                                <option value="Cyprus" {{ old('country') == 'Cyprus' ? 'selected' : '' }}>Cyprus</option>
                                <option value="Czech Republic" {{ old('country') == 'Czech Republic' ? 'selected' : '' }}>Czech Republic</option>
                                <option value="Denmark" {{ old('country') == 'Denmark' ? 'selected' : '' }}>Denmark</option>
                                <option value="Djibouti" {{ old('country') == 'Djibouti' ? 'selected' : '' }}>Djibouti</option>
                                <option value="Dominica" {{ old('country') == 'Dominica' ? 'selected' : '' }}>Dominica</option>
                                <option value="Dominican Republic" {{ old('country') == 'Dominican Republic' ? 'selected' : '' }}>Dominican Republic</option>
                                <option value="Ecuador" {{ old('country') == 'Ecuador' ? 'selected' : '' }}>Ecuador</option>
                                <option value="Egypt" {{ old('country') == 'Egypt' ? 'selected' : '' }}>Egypt</option>
                                <option value="El Salvador" {{ old('country') == 'El Salvador' ? 'selected' : '' }}>El Salvador</option>
                                <option value="Equatorial Guinea" {{ old('country') == 'Equatorial Guinea' ? 'selected' : '' }}>Equatorial Guinea</option>
                                <option value="Eritrea" {{ old('country') == 'Eritrea' ? 'selected' : '' }}>Eritrea</option>
                                <option value="Estonia" {{ old('country') == 'Estonia' ? 'selected' : '' }}>Estonia</option>
                                <option value="Ethiopia" {{ old('country') == 'Ethiopia' ? 'selected' : '' }}>Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)" {{ old('country') == 'Falkland Islands (Malvinas)' ? 'selected' : '' }}>Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands" {{ old('country') == 'Faroe Islands' ? 'selected' : '' }}>Faroe Islands</option>
                                <option value="Fiji" {{ old('country') == 'Fiji' ? 'selected' : '' }}>Fiji</option>
                                <option value="Finland" {{ old('country') == 'Finland' ? 'selected' : '' }}>Finland</option>
                                <option value="France" {{ old('country') == 'France' ? 'selected' : '' }}>France</option>
                                <option value="French Guiana" {{ old('country') == 'French Guiana' ? 'selected' : '' }}>French Guiana</option>
                                <option value="French Polynesia" {{ old('country') == 'French Polynesia' ? 'selected' : '' }}>French Polynesia</option>
                                <option value="French Southern Territories" {{ old('country') == 'French Southern Territories' ? 'selected' : '' }}>French Southern Territories</option>
                                <option value="Gabon" {{ old('country') == 'Gabon' ? 'selected' : '' }}>Gabon</option>
                                <option value="Gambia" {{ old('country') == 'Gambia' ? 'selected' : '' }}>Gambia</option>
                                <option value="Georgia" {{ old('country') == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                <option value="Germany" {{ old('country') == 'Germany' ? 'selected' : '' }}>Germany</option>
                                <option value="Ghana" {{ old('country') == 'Ghana' ? 'selected' : '' }}>Ghana</option>
                                <option value="Gibraltar" {{ old('country') == 'Gibraltar' ? 'selected' : '' }}>Gibraltar</option>
                                <option value="Greece" {{ old('country') == 'Greece' ? 'selected' : '' }}>Greece</option>
                                <option value="Greenland" {{ old('country') == 'Greenland' ? 'selected' : '' }}>Greenland</option>
                                <option value="Grenada" {{ old('country') == 'Grenada' ? 'selected' : '' }}>Grenada</option>
                                <option value="Guadeloupe" {{ old('country') == 'Guadeloupe' ? 'selected' : '' }}>Guadeloupe</option>
                                <option value="Guam" {{ old('country') == 'Guam' ? 'selected' : '' }}>Guam</option>
                                <option value="Guatemala" {{ old('country') == 'Guatemala' ? 'selected' : '' }}>Guatemala</option>
                                <option value="Guinea" {{ old('country') == 'Guinea' ? 'selected' : '' }}>Guinea</option>
                                <option value="Guinea-bissau" {{ old('country') == 'Guinea-bissau' ? 'selected' : '' }}>Guinea-bissau</option>
                                <option value="Guyana" {{ old('country') == 'Guyana' ? 'selected' : '' }}>Guyana</option>
                                <option value="Haiti" {{ old('country') == 'Haiti' ? 'selected' : '' }}>Haiti</option>
                                <option value="Heard Island and Mcdonald Islands" {{ old('country') == 'Heard Island and Mcdonald Islands' ? 'selected' : '' }}>Heard Island and Mcdonald Islands</option>
                                <option value="Holy See (Vatican City State)" {{ old('country') == 'Holy See (Vatican City State)' ? 'selected' : '' }}>Holy See (Vatican City State)</option>
                                <option value="Honduras" {{ old('country') == 'Honduras' ? 'selected' : '' }}>Honduras</option>
                                <option value="Hong Kong" {{ old('country') == 'Hong Kong' ? 'selected' : '' }}>Hong Kong</option>
                                <option value="Hungary" {{ old('country') == 'Hungary' ? 'selected' : '' }}>Hungary</option>
                                <option value="Iceland" {{ old('country') == 'Iceland' ? 'selected' : '' }}>Iceland</option>
                                <option value="India" {{ old('country') == 'India' ? 'selected' : '' }}>India</option>
                                <option value="Indonesia" {{ old('country') == 'Indonesia' ? 'selected' : '' }}>Indonesia</option>
                                <option value="Iran, Islamic Republic of" {{ old('country') == 'Iran, Islamic Republic of' ? 'selected' : '' }}>Iran, Islamic Republic of</option>
                                <option value="Iraq" {{ old('country') == 'Iraq' ? 'selected' : '' }}>Iraq</option>
                                <option value="Ireland" {{ old('country') == 'Ireland' ? 'selected' : '' }}>Ireland</option>
                                <option value="Israel" {{ old('country') == 'Israel' ? 'selected' : '' }}>Israel</option>
                                <option value="Italy" {{ old('country') == 'Italy' ? 'selected' : '' }}>Italy</option>
                                <option value="Jamaica" {{ old('country') == 'Jamaica' ? 'selected' : '' }}>Jamaica</option>
                                <option value="Japan" {{ old('country') == 'Japan' ? 'selected' : '' }}>Japan</option>
                                <option value="Jordan" {{ old('country') == 'Jordan' ? 'selected' : '' }}>Jordan</option>
                                <option value="Kazakhstan" {{ old('country') == 'Kazakhstan' ? 'selected' : '' }}>Kazakhstan</option>
                                <option value="Kenya" {{ old('country') == 'Kenya' ? 'selected' : '' }}>Kenya</option>
                                <option value="Kiribati" {{ old('country') == 'Kiribati' ? 'selected' : '' }}>Kiribati</option>
                                <option value="Korea, Democratic People's Republic of" {{ old('country') == "Korea, Democratic People's Republic of" ? 'selected' : '' }}>Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of" {{ old('country') == 'Korea, Republic of' ? 'selected' : '' }}>Korea, Republic of</option>
                                <option value="Kuwait" {{ old('country') == 'Kuwait' ? 'selected' : '' }}>Kuwait</option>
                                <option value="Kyrgyzstan" {{ old('country') == 'Kyrgyzstan' ? 'selected' : '' }}>Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic" {{ old('country') == "Lao People's Democratic Republic" ? 'selected' : '' }}>Lao People's Democratic Republic</option>
                                <option value="Latvia" {{ old('country') == 'Latvia' ? 'selected' : '' }}>Latvia</option>
                                <option value="Lebanon" {{ old('country') == 'Lebanon' ? 'selected' : '' }}>Lebanon</option>
                                <option value="Lesotho" {{ old('country') == 'Lesotho' ? 'selected' : '' }}>Lesotho</option>
                                <option value="Liberia" {{ old('country') == 'Liberia' ? 'selected' : '' }}>Liberia</option>
                                <option value="Libyan Arab Jamahiriya" {{ old('country') == 'Libyan Arab Jamahiriya' ? 'selected' : '' }}>Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein" {{ old('country') == 'Liechtenstein' ? 'selected' : '' }}>Liechtenstein</option>
                                <option value="Lithuania" {{ old('country') == 'Lithuania' ? 'selected' : '' }}>Lithuania</option>
                                <option value="Luxembourg" {{ old('country') == 'Luxembourg' ? 'selected' : '' }}>Luxembourg</option>
                                <option value="Macao" {{ old('country') == 'Macao' ? 'selected' : '' }}>Macao</option>
                                <option value="North Macedonia" {{ old('country') == 'North Macedonia' ? 'selected' : '' }}>North Macedonia</option>
                                <option value="Madagascar" {{ old('country') == 'Madagascar' ? 'selected' : '' }}>Madagascar</option>
                                <option value="Malawi" {{ old('country') == 'Malawi' ? 'selected' : '' }}>Malawi</option>
                                <option value="Malaysia" {{ old('country') == 'Malaysia' ? 'selected' : '' }}>Malaysia</option>
                                <option value="Maldives" {{ old('country') == 'Maldives' ? 'selected' : '' }}>Maldives</option>
                                <option value="Mali" {{ old('country') == 'Mali' ? 'selected' : '' }}>Mali</option>
                                <option value="Malta" {{ old('country') == 'Malta' ? 'selected' : '' }}>Malta</option>
                                <option value="Marshall Islands" {{ old('country') == 'Marshall Islands' ? 'selected' : '' }}>Marshall Islands</option>
                                <option value="Martinique" {{ old('country') == 'Martinique' ? 'selected' : '' }}>Martinique</option>
                                <option value="Mauritania" {{ old('country') == 'Mauritania' ? 'selected' : '' }}>Mauritania</option>
                                <option value="Mauritius" {{ old('country') == 'Mauritius' ? 'selected' : '' }}>Mauritius</option>
                                <option value="Mayotte" {{ old('country') == 'Mayotte' ? 'selected' : '' }}>Mayotte</option>
                                <option value="Mexico" {{ old('country') == 'Mexico' ? 'selected' : '' }}>Mexico</option>
                                <option value="Micronesia, Federated States of" {{ old('country') == 'Micronesia, Federated States of' ? 'selected' : '' }}>Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of" {{ old('country') == 'Moldova, Republic of' ? 'selected' : '' }}>Moldova, Republic of</option>
                                <option value="Monaco" {{ old('country') == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                                <option value="Mongolia" {{ old('country') == 'Mongolia' ? 'selected' : '' }}>Mongolia</option>
                                <option value="Montserrat" {{ old('country') == 'Montserrat' ? 'selected' : '' }}>Montserrat</option>
                                <option value="Morocco" {{ old('country') == 'Morocco' ? 'selected' : '' }}>Morocco</option>
                                <option value="Mozambique" {{ old('country') == 'Mozambique' ? 'selected' : '' }}>Mozambique</option>
                                <option value="Myanmar" {{ old('country') == 'Myanmar' ? 'selected' : '' }}>Myanmar</option>
                                <option value="Namibia" {{ old('country') == 'Namibia' ? 'selected' : '' }}>Namibia</option>
                                <option value="Nauru" {{ old('country') == 'Nauru' ? 'selected' : '' }}>Nauru</option>
                                <option value="Nepal" {{ old('country') == 'Nepal' ? 'selected' : '' }}>Nepal</option>
                                <option value="Netherlands" {{ old('country') == 'Netherlands' ? 'selected' : '' }}>Netherlands</option>
                                <option value="Netherlands Antilles" {{ old('country') == 'Netherlands Antilles' ? 'selected' : '' }}>Netherlands Antilles</option>
                                <option value="New Caledonia" {{ old('country') == 'New Caledonia' ? 'selected' : '' }}>New Caledonia</option>
                                <option value="New Zealand" {{ old('country') == 'New Zealand' ? 'selected' : '' }}>New Zealand</option>
                                <option value="Nicaragua" {{ old('country') == 'Nicaragua' ? 'selected' : '' }}>Nicaragua</option>
                                <option value="Niger" {{ old('country') == 'Niger' ? 'selected' : '' }}>Niger</option>
                                <option value="Nigeria" {{ old('country') == 'Nigeria' ? 'selected' : '' }}>Nigeria</option>
                                <option value="Niue" {{ old('country') == 'Niue' ? 'selected' : '' }}>Niue</option>
                                <option value="Norfolk Island" {{ old('country') == 'Norfolk Island' ? 'selected' : '' }}>Norfolk Island</option>
                                <option value="Northern Mariana Islands" {{ old('country') == 'Northern Mariana Islands' ? 'selected' : '' }}>Northern Mariana Islands</option>
                                <option value="Norway" {{ old('country') == 'Norway' ? 'selected' : '' }}>Norway</option>
                                <option value="Oman" {{ old('country') == 'Oman' ? 'selected' : '' }}>Oman</option>
                                <option value="Pakistan" {{ old('country') == 'Pakistan' ? 'selected' : '' }}>Pakistan</option>
                                <option value="Palau" {{ old('country') == 'Palau' ? 'selected' : '' }}>Palau</option>
                                <option value="Palestinian Territory, Occupied" {{ old('country') == 'Palestinian Territory, Occupied' ? 'selected' : '' }}>Palestinian Territory, Occupied</option>
                                <option value="Panama" {{ old('country') == 'Panama' ? 'selected' : '' }}>Panama</option>
                                <option value="Papua New Guinea" {{ old('country') == 'Papua New Guinea' ? 'selected' : '' }}>Papua New Guinea</option>
                                <option value="Paraguay" {{ old('country') == 'Paraguay' ? 'selected' : '' }}>Paraguay</option>
                                <option value="Peru" {{ old('country') == 'Peru' ? 'selected' : '' }}>Peru</option>
                                <option value="Philippines" {{ old('country') == 'Philippines' ? 'selected' : '' }}>Philippines</option>
                                <option value="Pitcairn" {{ old('country') == 'Pitcairn' ? 'selected' : '' }}>Pitcairn</option>
                                <option value="Poland" {{ old('country') == 'Poland' ? 'selected' : '' }}>Poland</option>
                                <option value="Portugal" {{ old('country') == 'Portugal' ? 'selected' : '' }}>Portugal</option>
                                <option value="Puerto Rico" {{ old('country') == 'Puerto Rico' ? 'selected' : '' }}>Puerto Rico</option>
                                <option value="Qatar" {{ old('country') == 'Qatar' ? 'selected' : '' }}>Qatar</option>
                                <option value="Reunion" {{ old('country') == 'Reunion' ? 'selected' : '' }}>Reunion</option>
                                <option value="Romania" {{ old('country') == 'Romania' ? 'selected' : '' }}>Romania</option>
                                <option value="Russian Federation" {{ old('country') == 'Russian Federation' ? 'selected' : '' }}>Russian Federation</option>
                                <option value="Rwanda" {{ old('country') == 'Rwanda' ? 'selected' : '' }}>Rwanda</option>
                                <option value="Saint Helena" {{ old('country') == 'Saint Helena' ? 'selected' : '' }}>Saint Helena</option>
                                <option value="Saint Kitts and Nevis" {{ old('country') == 'Saint Kitts and Nevis' ? 'selected' : '' }}>Saint Kitts and Nevis</option>
                                <option value="Saint Lucia" {{ old('country') == 'Saint Lucia' ? 'selected' : '' }}>Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon" {{ old('country') == 'Saint Pierre and Miquelon' ? 'selected' : '' }}>Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and The Grenadines" {{ old('country') == 'Saint Vincent and The Grenadines' ? 'selected' : '' }}>Saint Vincent and The Grenadines</option>
                                <option value="Samoa" {{ old('country') == 'Samoa' ? 'selected' : '' }}>Samoa</option>
                                <option value="San Marino" {{ old('country') == 'San Marino' ? 'selected' : '' }}>San Marino</option>
                                <option value="Sao Tome and Principe" {{ old('country') == 'Sao Tome and Principe' ? 'selected' : '' }}>Sao Tome and Principe</option>
                                <option value="Saudi Arabia" {{ old('country') == 'Saudi Arabia' ? 'selected' : '' }}>Saudi Arabia</option>
                                <option value="Senegal" {{ old('country') == 'Senegal' ? 'selected' : '' }}>Senegal</option>
                                <option value="Serbia and Montenegro" {{ old('country') == 'Serbia and Montenegro' ? 'selected' : '' }}>Serbia and Montenegro</option>
                                <option value="Seychelles" {{ old('country') == 'Seychelles' ? 'selected' : '' }}>Seychelles</option>
                                <option value="Sierra Leone" {{ old('country') == 'Sierra Leone' ? 'selected' : '' }}>Sierra Leone</option>
                                <option value="Singapore" {{ old('country') == 'Singapore' ? 'selected' : '' }}>Singapore</option>
                                <option value="Slovakia" {{ old('country') == 'Slovakia' ? 'selected' : '' }}>Slovakia</option>
                                <option value="Slovenia" {{ old('country') == 'Slovenia' ? 'selected' : '' }}>Slovenia</option>
                                <option value="Solomon Islands" {{ old('country') == 'Solomon Islands' ? 'selected' : '' }}>Solomon Islands</option>
                                <option value="Somalia" {{ old('country') == 'Somalia' ? 'selected' : '' }}>Somalia</option>
                                <option value="South Africa" {{ old('country') == 'South Africa' ? 'selected' : '' }}>South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands" {{ old('country') == 'South Georgia and The South Sandwich Islands' ? 'selected' : '' }}>South Georgia and The South Sandwich Islands</option>
                                <option value="Spain" {{ old('country') == 'Spain' ? 'selected' : '' }}>Spain</option>
                                <option value="Sri Lanka" {{ old('country') == 'Sri Lanka' ? 'selected' : '' }}>Sri Lanka</option>
                                <option value="Sudan" {{ old('country') == 'Sudan' ? 'selected' : '' }}>Sudan</option>
                                <option value="Suriname" {{ old('country') == 'Suriname' ? 'selected' : '' }}>Suriname</option>
                                <option value="Svalbard and Jan Mayen" {{ old('country') == 'Svalbard and Jan Mayen' ? 'selected' : '' }}>Svalbard and Jan Mayen</option>
                                <option value="Swaziland" {{ old('country') == 'Swaziland' ? 'selected' : '' }}>Swaziland</option>
                                <option value="Sweden" {{ old('country') == 'Sweden' ? 'selected' : '' }}>Sweden</option>
                                <option value="Switzerland" {{ old('country') == 'Switzerland' ? 'selected' : '' }}>Switzerland</option>
                                <option value="Syrian Arab Republic" {{ old('country') == 'Syrian Arab Republic' ? 'selected' : '' }}>Syrian Arab Republic</option>
                                <option value="Taiwan, Province of China" {{ old('country') == 'Taiwan, Province of China' ? 'selected' : '' }}>Taiwan, Province of China</option>
                                <option value="Tajikistan" {{ old('country') == 'Tajikistan' ? 'selected' : '' }}>Tajikistan</option>
                                <option value="Tanzania, United Republic of" {{ old('country') == 'Tanzania, United Republic of' ? 'selected' : '' }}>Tanzania, United Republic of</option>
                                <option value="Thailand" {{ old('country') == 'Thailand' ? 'selected' : '' }}>Thailand</option>
                                <option value="Timor-leste" {{ old('country') == 'Timor-leste' ? 'selected' : '' }}>Timor-leste</option>
                                <option value="Togo" {{ old('country') == 'Togo' ? 'selected' : '' }}>Togo</option>
                                <option value="Tokelau" {{ old('country') == 'Tokelau' ? 'selected' : '' }}>Tokelau</option>
                                <option value="Tonga" {{ old('country') == 'Tonga' ? 'selected' : '' }}>Tonga</option>
                                <option value="Trinidad and Tobago" {{ old('country') == 'Trinidad and Tobago' ? 'selected' : '' }}>Trinidad and Tobago</option>
                                <option value="Tunisia" {{ old('country') == 'Tunisia' ? 'selected' : '' }}>Tunisia</option>
                                <option value="Turkey" {{ old('country') == 'Turkey' ? 'selected' : '' }}>Turkey</option>
                                <option value="Turkmenistan" {{ old('country') == 'Turkmenistan' ? 'selected' : '' }}>Turkmenistan</option>
                                <option value="Turks and Caicos Islands" {{ old('country') == 'Turks and Caicos Islands' ? 'selected' : '' }}>Turks and Caicos Islands</option>
                                <option value="Tuvalu" {{ old('country') == 'Tuvalu' ? 'selected' : '' }}>Tuvalu</option>
                                <option value="Uganda" {{ old('country') == 'Uganda' ? 'selected' : '' }}>Uganda</option>
                                <option value="Ukraine" {{ old('country') == 'Ukraine' ? 'selected' : '' }}>Ukraine</option>
                                <option value="United Arab Emirates" {{ old('country') == 'United Arab Emirates' ? 'selected' : '' }}>United Arab Emirates</option>
                                <option value="United Kingdom" {{ old('country') == 'United Kingdom' ? 'selected' : '' }}>United Kingdom</option>
                                <option value="United States" {{ old('country') == 'United States' ? 'selected' : '' }}>United States</option>
                                <option value="United States Minor Outlying Islands" {{ old('country') == 'United States Minor Outlying Islands' ? 'selected' : '' }}>United States Minor Outlying Islands</option>
                                <option value="Uruguay" {{ old('country') == 'Uruguay' ? 'selected' : '' }}>Uruguay</option>
                                <option value="Uzbekistan" {{ old('country') == 'Uzbekistan' ? 'selected' : '' }}>Uzbekistan</option>
                                <option value="Vanuatu" {{ old('country') == 'Vanuatu' ? 'selected' : '' }}>Vanuatu</option>
                                <option value="Venezuela" {{ old('country') == 'Venezuela' ? 'selected' : '' }}>Venezuela</option>
                                <option value="Viet Nam" {{ old('country') == 'Viet Nam' ? 'selected' : '' }}>Viet Nam</option>
                                <option value="Virgin Islands, British" {{ old('country') == 'Virgin Islands, British' ? 'selected' : '' }}>Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S." {{ old('country') == 'Virgin Islands, U.S.' ? 'selected' : '' }}>Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna" {{ old('country') == 'Wallis and Futuna' ? 'selected' : '' }}>Wallis and Futuna</option>
                                <option value="Western Sahara" {{ old('country') == 'Western Sahara' ? 'selected' : '' }}>Western Sahara</option>
                                <option value="Yemen" {{ old('country') == 'Yemen' ? 'selected' : '' }}>Yemen</option>
                                <option value="Zambia" {{ old('country') == 'Zambia' ? 'selected' : '' }}>Zambia</option>
                                <option value="Zimbabwe" {{ old('country') == 'Zimbabwe' ? 'selected' : '' }}>Zimbabwe</option>
                            </select>
                        </div>
                    </fieldset>
                    <fieldset class="box-auth-pass mb-12 tf-field icon-absolute">
                        <i class="icon-lock"></i>
                        <input type="password" name="password" placeholder="Password" id="id_email-rawPassword"
                            class="password-field" required>
                        <span class="show-pass">
                            <span class="icon-eye"></span>
                            <span class="icon-eye-off"></span>
                        </span>
                    </fieldset>
                    <fieldset class="box-auth-pass mb-12 tf-field icon-absolute">
                        <i class="icon-lock"></i>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password"
                            class="password-field" required>
                        <span class="show-pass">
                            <span class="icon-eye"></span>
                            <span class="icon-eye-off"></span>
                        </span>
                    </fieldset>
                    <div class="mb-12">
                        <label class="d-flex align-items-start gap-8" style="cursor: pointer;">
                            <input type="checkbox" name="terms" id="terms" {{ old('terms') ? 'checked' : '' }} required
                                style="width: 18px; height: 18px; margin-top: 2px; flex-shrink: 0; accent-color: #9333EA;">
                            <span style="font-size: 14px; color: #6c757d;">
                                I agree to the <a href="/terms" style="color: #7e6edd;">Terms and
                                    Conditions</a> and <a href="/privacy" style="color: #7e6edd;">Privacy
                                    Policy</a>
                            </span>
                        </label>
                    </div>
                    <input type="hidden" name="i_user" value="{{ $_GET['i'] ?? 0 }}">
                </div>
                <div class="bottom-from">
                    <button type="submit" class="tf-btn primary mb-12">Sign Up</button>
                </div>
                <div class="fixed-bottom-btn">
                    <p class="text-bottom">
                        Already have an wallet? <a href="{{ url('login') }}">Sign In</a>
                    </p>
                </div>
            </form>

        </div>

    </div>
@endsection
