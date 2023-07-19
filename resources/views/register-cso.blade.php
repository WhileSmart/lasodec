<x-layouts.app>
    <div class="regsiter-cso-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
        @slot('current')
        Register CSO
        @endslot
        @endcomponent

        <div class="con">
            <section>
                <form action="{{ route('store-cso') }}" class="create-cso-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-section">
                        <div class="flex">
                            <div class="field 
                            @if ($errors->has('name'))
                                error
                            @endif
                            ">
                                <input type="text" name="name" id="name" placeholder="CSO name" value="{{ old('name') }}" required>
                                @error('name')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @if ($errors->has('partnership'))
                                error
                            @endif
                            ">
                                <label for="">Acronym</label>
                                <input type="text" name="partnership" id="partnership" placeholder="acronym" value="{{ old('partnership') }}" required>
                                @error('partnership')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field 
                            @if ($errors->has('registration_year'))
                                error
                            @endif
                            ">
                                <label for="registration_year">Registration year</label>
                                <input type="number" name="registration_year" id="registration-year"
                                    placeholder="registration year" value="{{ old('registration_year') }}" required>
                                @error('registration_year')
                                    <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @error('registration_number')
                                error
                            @enderror
                            ">
                                <label for="">Registration number</label>
                                <input type="text" name="registration_number" id="registration-number" placeholder="registration-number" value="{{ old('registration_number') }}" required>
                                @error('registration_number')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field 
                            @error('organization_type')
                                error
                            @enderror
                            ">
                                <label for="">Type of organization</label>
                                <select name="organization_type" id="organization-type" value="{{ old('organization_type') }}" required>
                                    <option value="" disabled selected hidden>Choose</option>
                                    <option value="Association">Association</option>
                                    <option value="Accredited NGO">Accredited NGO (Non-governmental Organisation)</option>
                                    <option value="trade union">Trade union</option>
                                    <option value="CIG">CIG (Community Interest Group)</option>
                                    <option value="Cooperative">Cooperative</option>
                                    <option value="Media">Media</option>
                                    <option value="CBO">CBO (Community-based Organisation)</option>
                                    <option value="Village development Association">Village development Association
                                    </option>
                                    <option value="CSO Network">CSO Network</option>
                                    <option value="Faith Based organization">Faith Based organization</option>
                                </select>
                                @error('organization_type')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @error('country')
                                error
                            @enderror
                            ">
                                <label for="">Country</label>
                                <select name="country" id="country" value="{{ old('country') }}" required>
                                    <option value="" disabled selected hidden>choose</option>
                                    <option value="cameroon">Cameroon</option>
                                    <option value="nigeria">Nigeria</option>
                                    <option value="ghana">Ghana</option>
                                    <option value="rwanda">Rwanda</option>
                                </select>
                                @error('country')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field 
                            @error('region')
                                error
                            @enderror
                            ">
                                <label for="">State/Region/Country</label>
                                <input type="text" name="region" id="region" placeholder="region" value="{{ old('region') }}" required>
                                @error('region')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @error('division')
                                error
                            @enderror
                            ">
                                <label for="">Region/Province</label>
                                <input type="text" name="division" id="division" placeholder="division" value="{{ old('division') }}" required>
                                @error('division')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Sub Division</label>
                                <input type="text" name="sub_division" id="sub-division" placeholder="sub-division" value="{{ old('sub_division') }}" required>
                            </div>
                            <div class="field 
                            @error('village')
                                error
                            @enderror
                            ">
                                <label for="">Village</label>
                                <input type="text" name="village" id="village" placeholder="village" value="{{ old('village') }}" required>
                                @error('village')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <label for="image">
                                <span>Upload Logo( jpeg or PNG) Max:1mb</span>
                                <input type="file" name="image" id="" accept="image/*" />
                                @error('image')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </label>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="flex">
                            <div class="field 
                            @error('contact_person_name')
                                error
                            @enderror
                            ">
                                <label for="">Name of contact person </label>
                                <input type="text" name="contact_person_name" id="contact-name" placeholder="contact-name" value="{{ old('contact_person_name') }}" required>
                                @error('contact_person_name')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @error('contact_person_sex')
                                error
                            @enderror
                            ">
                                <label for="">Sex of contact person</label>
                                <select name="contact_person_sex" id="contact-sex" value="{{ old('contact_person_sex') }}" required>
                                    <option value="" disabled selected hidden>choose</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                @error('contact_person_sex')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field 
                            @error('contact_person_email')
                                error
                            @enderror
                            ">
                                <label for="">Email of contact person</label>
                                <input type="email" name="contact_person_email" id="contact-email" placeholder="contact-email" value="{{ old('contact_person_email') }}" required>
                                @error('contact_person_email')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @error('contact_person_tel')
                                error
                            @enderror
                            ">
                                <label for="">Telephone of contact person</label>
                                <input type="tel" name="contact_person_tel" id="contact-phone" placeholder="contact-phone" value="{{ old('contact_person_tel') }}" required>
                                @error('contact_person_tel')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field 
                            @error('contact_person_position')
                                error
                            @enderror
                            ">
                                <label for="">Position of contact person</label>
                                <input type="text" name="contact_person_position" id="contact-position" placeholder="contact-position" value="{{ old('contact_person_position') }}" required>
                                @error('contact_person_position')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @error('address')
                                error
                            @enderror
                            ">
                                <label for="">CSO physical address</label>
                                <input type="text" name="address" id="cso-address" placeholder="cso-address" value="{{ old('address') }}" required>
                                @error('address')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field 
                            @error('website')
                                error
                            @enderror
                            ">
                                <label for="">CSO Website</label>
                                <input type="text" name="website" id="cso-website" placeholder="cso-website" value="{{ old('website') }}" required>
                                @error('website')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @error('email')
                                error
                            @enderror
                            ">
                                <label for="">CSO email address</label>
                                <input type="email" name="email" id="cso-email" placeholder="cso-email" value="{{ old('email') }}" required>
                                @error('email')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field 
                            @error('tel')
                                error
                            @enderror
                            ">
                                <label for="">CSO contact phone number</label>
                                <input type="tel" name="tel" id="cso-contact" placeholder="cso-contact" value="{{ old('tel') }}" required>
                                @error('tel')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="flex">
                            <div class="field 
                            @error('vision_statement')
                                error
                            @enderror
                            ">
                                <label for="">CSO Vision statement</label>
                                <input type="text" name="vision_statement" id="vision-statement" placeholder="vision-statement" value="{{ old('vision_statement') }}" oninput="countWords()"  required>
                                @error('vision_statement')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                                <span id="vision-count">0/150 words</span>
                            </div>
                            <div class="field 
                            @error('primary_target_beneficiaries')
                                error
                            @enderror
                            ">
                                <label for="">Primary target beneficiaries</label>
                                <input type="text" name="primary_target_beneficiaries" id="primary-meneficiaries" placeholder="primary-beneficiaries" value="{{ old('primary_target_beneficiaries') }}" required>
                                @error('primary_target_beneficiaries')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field 
                            @error('domain')
                                error
                            @enderror
                            ">
                                <label for="">Primary domain of activity</label>
                                <select name="domain" id="domain-of-activity" value="{{ old('domain') }}" required>
                                    <option value="" disabled selected hidden>choose</option>
                                    @foreach ($domains as $domain)
                                    <option value="{{ $domain->name }}">{{ $domain->name }}</option>
                                    @endforeach
                                </select>
                                @error('domain')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @error('primary_target_beneficiaries')
                                error
                            @enderror
                            ">
                                <!-- This is supposed to be in the form of a checkbox so that user can tick -->
                                <label for="second_domain">Other domains of activity</label>
                                <select name="second_domain" id="domain-of-activity" value="{{ old('second_domain') }}">
                                    @foreach ($domains as $domain)
                                    <option value="{{ $domain->name }}">{{ $domain->name }}</option>
                                    @endforeach
                                    <option value="">none</option>
                                </select>
                                @error('second_domain')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <!-- <div class="field">
                                <label for="third_domain">Choose third domain of activity</label>
                                <select name="third_domain" id="domain-of-activity" value="{{ old('third_domain') }}">
                                    @foreach ($domains as $domain)
                                    <option value="{{ $domain->name }}">{{ $domain->name }}</option>
                                    @endforeach
                                    <option value="">none</option>
                                </select>
                                @error('third_domain')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div> -->
                            <div class="field 
                            @error('board_directors')
                                error
                            @enderror
                            ">
                                <label for="">Board of directors</label>
                                <div class="radio-flex">
                                    <div class="sub">
                                        <input type="radio" name="board_directors" value="true" id="board-of-directors-yes">
                                        <label for="board-of-directors-yes">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="sub">
                                        <input type="radio" name="board_directors" value="false" id="board-of-directors-no">
                                        <label for="board-of-directors-no">
                                            No
                                        </label>
                                    </div>
                                </div>
                                @error('board_directors')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @error('background')
                                error
                            @enderror
                            ">
                                <label for="">Organization background and track record</label>
                                <input type="text" name="background" id="background" placeholder="" value="{{ old('background') }}" required>
                                @error('background')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="field 
                        @error('board_directors')
                                error
                        @enderror
                        ">
                            <label for="">Organisation leadership</label>
                            <div class="radio-flex">
                                <div class="sub">
                                    <input type="radio" name="organization_leaderships" id="leadership-women" value="Women headed organization">
                                    <label for="leadership-women">
                                        Women-led organization
                                    </label>
                                </div>
                                <div class="sub">
                                    <input type="radio" name="organization_leaderships" id="leadership-youth" value="Youth lead organization">
                                    <label for="leadership-youth">
                                        Youth-led organization
                                    </label>
                                </div>
                                <div class="sub">
                                    <input type="radio" name="organization_leaderships" id="leadership-General" value="General">
                                    <label for="leadership-General">
                                        General
                                    </label>
                                </div>
                            </div>
                            @error('organization_leaderships')
                            <span class="error-msg">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="field 
                        @error('african_coverage')
                                error
                        @enderror
                        ">
                            <label for="">CSO geographical coverage</label>
                            <select name="african_coverage" id="" value="{{ old('african_coverage') }}" required>
                                <option value="" disabled selected hidden>select</option>
                                <option value="local">Local</option>
                                <option value="national">National</option>
                                <option value="global">Global (more than one african country)</option>
                            </select>
                            @error('african_coverage')
                            <span class="error-msg">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-section">
                        <button type="submit" class="custom-button primary">Confirm CSO Registration</button>
                    </div>
                </form>
            </section>
        </div>

    </div>
</x-layouts.app>

<script>
    function countWords() {
    const input = document.getElementById('vision-statement').value;
    const wordCount = input.trim().split(/\s+/).length;
    if (wordCount >= 150) {
    // Disable the input field if word count exceeds 150
    document.getElementById('vision-statement').disabled = true;
  } else {
    // Enable the input field otherwise
    document.getElementById('vision-statement').disabled = false;
  }
    document.getElementById('vision-count').textContent = `${wordCount}/150 words maximum`;
}
</script>