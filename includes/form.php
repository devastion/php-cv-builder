<form action="generatepdf.php" method="get" target="_blank">
    <fieldset>
        <legend class="text-center mt-5">Personal Info</legend>
        <div class="row">
            <div class="col-12 col-md-4 my-3">
                <label for="fname" class="form-label">First name</label>
                <input type="text" class="form-control" id="fname" placeholder="John" name="fname" value="John">
            </div>

            <div class="col-12 col-md-4 my-3">
                <label for="lname" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lname" placeholder="Doe" name="lname" value="Doe">
            </div>

            <div class="col-12 col-md-4 my-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="john@doe.com" name="email" value="john@doe.com">
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-4 my-3">
                <label for="phone" class="form-label">Phone number</label>
                <input type="tel" class="form-control" id="phone" placeholder="0892314861" name="phone" value="0892314861">
            </div>

            <div class="col-12 col-md-4 my-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Sofia, Montevideo" name="address" value="Sofia, Montevideo">
            </div>

            <div class="col-12 col-md-4 my-3">
                <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control" id="position" placeholder="Front End Developer" name="position" value="Front End Developer">
            </div>
        </div>
    </fieldset>

    <fieldset>
        <legend class="text-center mt-5">Basic Education</legend>
        <div class="row">
            <div class="col-12 col-md-6 my-3">
                <label for="primary" class="form-label">Primary school</label>
                <input type="text" class="form-control" id="primary" placeholder="My Primary School" name="primary" value="My Primary School">
            </div>

            <div class="col-12 col-md-6 my-3">
                <label for="secondary" class="form-label">Secondary school</label>
                <input type="text" class="form-control" id="secondary" placeholder="My Secondary School" name="secondary" value="My Secondary School">
            </div>
        </div>
    </fieldset>

    <fieldset id="education">
        <legend class="text-center mt-5">Higher Education</legend>
        <div class="row">
            <div class="col-6 col-md-3 my-3">
                <label for="startYear[0]" class="form-label">Start year</label>
                <input type="number" class="form-control" id="startYear[0]" placeholder="2007" name="startYear[0]" value="2007" min="1950" max="2022">
            </div>

            <div class="col-6 col-md-3 my-3">
                <label for="gradYear[0]" class="form-label">Graduation year</label>
                <input type="number" class="form-control" id="gradYear[0]" placeholder="2008" name="gradYear[0]" value="2008">
            </div>

            <div class="col-12 col-md-6 my-3">
                <label for="institution[0]" class="form-label">Institution</label>
                <input type="text" class="form-control" id="institution[0]" placeholder="New Bulgarian University" name="institution[0]" value="New Bulgarian University">
            </div>
        </div>
    </fieldset>
    <div class="d-flex justify-content-center my-3">
        <button type="button" class="btn btn-primary" id="addEducation">
            Add Education
        </button>
    </div>

    <fieldset id="experience">
        <legend class="text-center mt-5">Experience</legend>
        <div class="row">
            <div class="col-6 col-md-3 my-3">
                <label for="startExp[0]" class="form-label">Start year</label>
                <input type="number" class="form-control" id="startExp[0]" placeholder="2015" name="startExp[0]" value="2015" min="1950" max="2022">
            </div>

            <div class="col-6 col-md-3 my-3">
                <label for="leaving[0]" class="form-label">Leaving year</label>
                <input type="number" class="form-control" id="leaving[0]" placeholder="2008" name="leaving[0]" value="2016">
            </div>

            <div class="col-12 col-md-6 my-3">
                <label for="job[0]" class="form-label">Job</label>
                <input type="text" class="form-control" id="job[0]" placeholder="WordPress Developer" name="job[0]" value="WordPress Developer">
            </div>

            <div class="col-12 my-3">
                <label for="info[0]" class="form-label">Additional Info</label>
                <textarea id="info[0]" rows="3" class="form-control" placeholder="Write some info about your experience" name="info[0]" maxlength="255">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lacus nibh, vehicula ut nibh ut, volutpat efficitur metus. Donec semper ipsum luctus tellus maximus imperdiet. Cras vehicula purus sed eros feugiat, in posuere justo pharetra. Curabitur vitae efficitur tellus. Cras rhoncus arcu lorem, a sollicitudin nisl vestibulum sit amet. Donec. </textarea>
            </div>
        </div>
    </fieldset>
    <div class="d-flex justify-content-center my-3">
        <button type="button" class="btn btn-primary" id="addExperience">
            Add Experience
        </button>
    </div>
    <div class="d-flex justify-content-center my-3">
        <button class="btn btn-danger" type="submit">SUBMIT AND GENERATE CV</button>
    </div>
</form>