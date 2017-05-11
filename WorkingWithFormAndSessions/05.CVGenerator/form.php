<form method="GET">
    <fieldset>
        <legend>Personal Information</legend>
        <div><input type="text" placeholder="First Name" name="firstName"></div>
        <div><input type="text" placeholder="Last Name" name="lastName"></div>
        <div><input type="text" placeholder="Email" name="email"></div>
        <div><input type="text" placeholder="Phone Number" name="phone"></div>
        <div>
            Female <input type="radio" name="gender" value="Female">
            Male <input type="radio" name="gender" value="Male">
        </div>
        <div>
            Birth Date <br>
            <input type="date" name="birthDate">
        </div>
        <div>
            Nationality <br>
            <select name="nationality">
                <option value="Bulgarian">Bulgarian</option>
                <option value="German">German</option>
                <option value="Italian">Italian</option>
                <option value="Chinese">Chinese</option>
                <option value="English">English</option>
                <option value="Mexican">Mexican</option>
                <option value="Indian">Indian</option>
            </select>
        </div>
    </fieldset>

    <fieldset>
        <legend>Last Work Position</legend>
        <div> Company Name <input type="text" name="companyName"></div>
        <div>
           From
            <input type="date" name="from">
        </div>
        <div>
            To
            <input type="date" name="to">
        </div>
    </fieldset>

    <fieldset>
        <legend>Computer Skills</legend>
        <div>
            Programming Languages<br>
            <input type="text" name="programLanguage[]">
            <select name="languageLevel[]">
                <option value="Beginner">Beginner</option>
                <option value="Junior">Junior</option>
                <option value="Senior">Senior</option>
            </select>
        </div>
        <div>
            <input type="submit" name="removeLanguage" value="Remove Language">
            <input type="submit" name="addLanguage" value="Add Language">
        </div>
    </fieldset>

    <fieldset>
        <legend>Other Skills</legend>
        <div>
            <div><label for="otherLang">Languages</label></div>
            <input type="text" name="otherLang[]" id="otherLang">
            <select name="comprehension[]">
                <option value="beginner" selected>Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select>
            <select name="reading[]">
                <option value="beginner" selected>Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select>
            <select name="writing[]">
                <option value="beginner" selected>Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select>
        </div>
        <div>
            <input type="submit" name="removeLanguage" value="Remove Language">
            <input type="submit" name="addLanguage" value="Add Language">
        </div>

        <div>
            <div><label for="driversLicense">Driver's License</label></div>
            B <input type="checkbox" name="drivingLicense[]" value="B">
            A <input type="checkbox" name="drivingLicense[]" value="A">
            C <input type="checkbox" name="drivingLicense[]" value="C" >
        </div>
    </fieldset>
    <input type="submit" value="Generate CV" name="generate">
</form>

