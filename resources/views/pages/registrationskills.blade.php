@extends('layout.app')
@section('content')
<!-- ======= Hero Section ======= -->
<!-- <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>WELCOME TO <span>SAN JUAN SKILLS</span></h1>
      <h2>Be one of San Juan's talented personalities!</h2>
      <a href="#about" class="btn-get-started scrollto">REGISTER NOW</a>
    </div>
  </section> -->

  <!-- <div class="container" >

  </div> -->
  <style>
    #main{
      background-color: darkred;
    }
  </style>
  <main id="main">
  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
  <div class="row">
    <div class="col-4" style="position: absolute; right: 60%; z-index:10;">
      <div class="container mt-5"  style="max-width: 65% !important; box-shadow: 1px 0px 5px 5px #888888; border-radius: 5px; background-color:#FFFAFA; padding: 20px;">
        <div class="col-12">
          <h3 style="font-weight:600; font-size: 20px;">Admission Category:</h3>
        </div>
          <div class="col-12">
            <select class="form-control" required name="admision">
              <option disabled selected>Choose</option>
              <option value="New Applicant">New Applicant</option>
              <option value="Older/Former student<">Older/Former student</option>
            </select>
          </div><br>
          <div class="col-12">
            <h3 style="font-weight:600; font-size: 18px;">Are you a resident of San Juan City?</h3>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ressj" id="" required value="Yes">
              <label class="form-check-label" for="category1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="rejsj" id="" required value="No">
              <label class="form-check-label" for="category1">No</label>
            </div>
          </div><br>
          <div class="col-12">
            <h3 style="font-weight:600; font-size: 18px;">Barangay: </h3>
            <select class="form-control" required name="brgyreg">
              <option disabled selected>Choose</option>
              <option value="West Crame">West Crame</option>
              <option value=">GreenHills<">GreenHills</option>
              <option value="Onse">Onse</option>
              <option value="Tibagan">Tibagan</option>
              <option value="Little Baguio">Little Baguio</option>
              <option value="Addition Hills">Addition Hills</option>
              <option value="Maytunas">Maytunas</option>
              <option value="Sta. Lucia">Sta. Lucia</option>
              <option value="Kabayanan">Kabayanan</option>
              <option value="St. Joseph">St. Joseph</option>
              <option value="Isabelita">Isabelita</option>
              <option value="Pasadena">Pasadena</option>
              <option value="Corazon De Jesus">Corazon De Jesus</option>
              <option value="Batis">Batis</option>
              <option value="San Perfecto">San Perfecto</option>
              <option value="Pedro Cruz">Pedro Cruz</option>
              <option value="Progreso">Progreso</option>
              <option value="Rivera">Rivera</option>
              <option value="Balong-Bato">Balong-Bato</option>
              <option value="Ermintaño">Ermintaño</option>
              <option value="Salapan">Salapan</option>
            </select>
          </div>
          <div class="col-12 mt-2">
            <h4 style="font-size:20px;">REQUIREMENTS</h4>
            <p style="font-size:13px;">- 3 pcs 1x1 ID Picture<br>
            - Photocopy of Birth or Marriage Certificate<br>
            - Photocopy of High School/College Diploma / Transcript of Records (required for Caregiving and Electronics courses)<br>
            - Photocopy of valid ID with San Juan City Proof of Residence or Barangay Certificate<br>
            </p>
          </div>
        </div>
      </div>
    <div class="col-8" style="left:28%;">
      <div class="container mt-5"  style="max-width: 80% !important; box-shadow: 1px 0px 5px 5px #888888; border-radius: 5px; background-color:#FFFAFA; padding: 20px; padding-left:20px;">

        <div class="section-title" style="padding-bottom:2px;">

          <div class="row">
            <div class="col-12">
              <h3 style="font-size:30px; font-weight:900;">Regristration Form</h3>
            </div>
          </div>

        </div>

          <div  class="row">
            <div class="col-12">
              <h3 style="font-weight:600; font-size: 25px;">Name:</h3>
            </div>
            <div class="col-4">
              <input type="text" class="form-control" placeholder="Last Name, Extension Name (Jr., Sr)" required name="lname">
            </div>
            <div class="col-4">
              <input type="text" class="form-control" placeholder="First Name" required name="fname">
            </div>
            <div class="col-4">
              <input type="text" class="form-control" placeholder="Middle Name" required name="mname">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-12">
              <h3 style="font-weight:600; font-size: 25px;">Complete Permanent Mailing Address:</h3>
            </div>
            <div class="col-3">
              <input type="text" class="form-control" placeholder="Number, Street" required name="street">
            </div>
            <div class="col-3">
              <input type="text" class="form-control" placeholder="District" required name="district">
            </div>
            <div class="col-3">
              <input type="text" class="form-control" placeholder="Barangay" required name="brgy">
            </div>
            <div class="col-3">
              <input type="text" class="form-control" placeholder="City/Municipality" required name="city">
            </div>
            <br><br>

            <div class="col-4">
              <input type="text" class="form-control" placeholder="Email Address/Facebook Account" required name="email">
            </div>
            <div class="col-4">
              <input type="text" class="form-control" placeholder="Contact No." required name="contact_no">
            </div>
            <div class="col-4">
              <input type="text" class="form-control" placeholder="Nationality" required name="nationality">
            </div>

          </div>
          <br>

          <div class="row">
            <div class="col-12">
              <h3 style="font-weight:600; font-size: 25px;">Personal Information:</h3>
            </div>
          </div>
          <div class="row" style="padding:2%;">
            <div class="col-4" style="border-right: solid;">
                <p style="text-align: left; font-weight:700;">Gender</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="" required value="Male">
                  <label class="form-check-label" for="category1">Male</label>
                </div> <br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="" required value="Female">
                  <label class="form-check-label" for="category1">Female</label>
                </div>
            </div>
            <div class="col-4" style="border-right: solid;">
                <p style="text-align: left; font-weight:700; ">Civil Status</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="CivStat" id="" required value="Single">
                  <label class="form-check-label" for="category1">Single</label>
                </div><br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="CivStat" id="" required value="Widow">
                  <label class="form-check-label" for="category1">Widow</label>
                </div><br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="CivStat" id="" required value="Married">
                  <label class="form-check-label" for="category1">Married</label>
                </div><br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="CivStat" id="" required value="Separated">
                  <label class="form-check-label" for="category1">Separated</label>
                </div>
            </div>
            <div class="col-4">
                <p style="text-align: left; font-weight:700; ">Employment Status</p>
                <div class="no" style="text-align: left;">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="EmpStat" id="" required value="Employed">
                    <label class="form-check-label" for="category1">Employed</label>
                  </div><br>&nbsp&nbsp&nbsp
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="EmpTag" id="" required value="Permanent/Regular" disabled>
                      <label class="form-check-label" for="category1">Permanent/Regular</label>
                    </div><br>&nbsp&nbsp&nbsp
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="EmpTag" id="" required value="Job Order" disabled>
                      <label class="form-check-label" for="category1">Job Order</label>
                    </div><br>&nbsp&nbsp&nbsp
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="EmpTag" id="" required value="Contractual" disabled>
                      <label class="form-check-label" for="category1">Contractual</label>
                    </div><br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="EmpStat" id="" required value="Unemployed">
                    <label class="form-check-label" for="category1">Unemployed</label>
                  </div><br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="EmpStat" id="" required value="Self-employed">
                    <label class="form-check-label" for="category1">Self-employed</label>
                  </div>
                  <input type="text" class="form-control" disabled="disabled" placeholder="Nature of Business" required name="NatureBusiness"><br>
                </div>
            </div>
          </div>
          <div class="row" style=" padding: 2%; padding-top: 0;">
            <div class="col-12">
              <p style="text-align: left; font-weight:700;">Birthdate</p>
            </div>
            <div class="col-4">
              <select class="form-control" required name="monthfobirth">
                <option disabled selected>Month of Birth</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
              </select>
            </div>
            <div class="col-3">
              <input type="number" class="form-control" placeholder="Day of Birth" required name="dayofbirth" min="1" max="31">
            </div>
            <div class="col-3">
              <input type="number" class="form-control" placeholder="Year of Birth" required name="yearofbirth" min="1900">
            </div>
            <div class="col-2">
              <input type="text" class="form-control" placeholder="Age" required name="age">
            </div>
          </div>

          <div class="row" style="padding: 2%;">
            <div class="col-12">
              <p style="text-align: left; font-weight:700; ">Birthplace</p>
            </div>
            <div class="col-4">
              <input type="text" class="form-control" placeholder="City/Municipality" required name="City/Municipality">
            </div>
            <div class="col-4">
              <input type="text" class="form-control" placeholder="Province" required name="Province">
            </div>
            <div class="col-4">
              <input type="text" class="form-control" placeholder="Region" required name="Region">
            </div>
          </div>
          <div class="row" style="padding: 2%; padding-bottom: 0%;">
            <div class="col-12">
              <p style="text-align: left; font-weight:700;">Educational Attainment</p>
            </div>
          </div>
            <div class="row" style=" border-bottom: solid;">
              <div class="col-4" style="border-right: solid; border-top:solid; border-left: solid;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="EducAttain" id="" required value="nogradecom">
                  <label class="form-check-label" for="category1">No Grade Completed</label>
                </div>
              </div>
              <div class="col-4" style="border-right: solid; border-top:solid;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="EducAttain" id="" required value="elemgrad">
                  <label class="form-check-label" for="category1">Elementary Undergraduate</label>
                </div>
              </div>
              <div class="col-4" style="border-right: solid; border-top:solid;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="EducAttain" id="" required value="elemundergrad">
                  <label class="form-check-label" for="category1">Elementary Graduate</label>
                </div>
              </div>
            </div>

            <div class="row" style=" border-bottom: solid;">
              <div class="col-3" style="border-left: solid; border-right:solid;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="EducAttain" id="" required value="collegeundergrad">
                  <label class="form-check-label" for="category1">High School Undergraduate </label>
                </div>
              </div>
              <div class="col-3" style="border-right: solid;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="EducAttain" id="" required value="hsgrad">
                  <label class="form-check-label" for="category1">High School Graduate</label>
                </div>
              </div>
              <div class="col-3" style="border-right: solid;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="EducAttain" id="" required value="hsundergrad">
                  <label class="form-check-label" for="category1">College Graduate</label>
                </div>
              </div>
              <div class="col-3" style="border-right: solid;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="EducAttain" id="" required value="collegegrad">
                  <label class="form-check-label" for="category1">College Undergraduate</label>
                </div>
              </div>
            </div>

              <div class="row" style="padding: 2%;">
                <div class="col-6">
                  <p style="text-align: left; font-weight:700;">Mother's Name</p>
                  <input type="text" class="form-control" placeholder="Mother's Name" required name="mothername">
                </div>
                <div class="col-6">
                  <p style="text-align: left; font-weight:700;">Father's Name</p>
                  <input type="text" class="form-control" placeholder="Father's Name" required name="fathername">
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <h3 style="font-weight:600; font-size: 25px;">Learner/Trainee/Student (Clients) Classification</h3>
                </div>
              </div>

              <div class="row" style="padding: 2%;">
              <div class="col-6" >
                <select class="form-control" required name="choose">
                  <option disabled selected>Choose</option>
                  <option value="Student">Student</option>
                  <option value="Out-of-Student Youth">Out-of-Student Youth</option>
                  <option value="Informal Worker">Informal Worker</option>
                  <option value="Industry Worker">Industry Worker</option>

                  <option value="Solo Parent">Solo Parent</option>
                  <option value="Cooperatives">Cooperatives</option>

                  <option value="Solo Parent's Children">Solo Parent's Children</option>
                  <option value="Uniformed Personnel">Uniformed Personnel</option>
                  <option value="Family Enterprises">Family Enterprises</option>
                  <option value="Family Members of Microentrepreneurs">Family Members of Microentrepreneurs</option>

                  <option value="Local Government Units (CTECs)">Local Government Units (CTECs)</option>
                  <option value="Farmers and Fishermen">Farmers and Fishermen</option>

                  <option value="Displaced HEIs Teaching Personnel">Displaced HEIs Teaching Personnel</option>
                  <option value="Family Members of Farmers and Fishermen">Family Members of Farmers and Fishermen</option>
                  <option value="Informal Settler">Informal Settler</option>
                  
                  <option value="Displaced Workers">Displaced Workers</option>
                  <option value="Fisherfolks">Fisherfolks</option>
                  <option value="Currently Employed Workers">Currently Employed Workers</option>
                  <option value="Community Training & Employment Coordinator">Community Training & Employment Coordinator</option>

                  <option value="Employees w/ Contractual/Job Order Status ">Employees w/ Contractual/Job Order Status</option>
                  <option value="TVET Trainers">TVET Trainers</option>
                  <option value="4ps Beneficiary">4ps Beneficiary</option>
                  <option value="Returning/repatriated OFWs">Returning/repatriated OFWs</option>

                  <option value="Urban and Rural Poor">Urban and Rural Poor</option>
                  <option value="Agrarian Reform Beneficiary">Agrarian Reform Beneficiary</option>
                  <option value="OFW Dependent">OFW Dependent</option>
                  <option value="MSMEs">MSMEs</option>

                  <option value="RCEF - RESP">RCEF - RESP</option>
                  <option value="Family Members of AFP & PNP Killed-in Action">Family Members of AFP & PNP Killed-in Action</option>
                </select>
              </div>

              <div class="col-6">
                <select class="form-control" required name="choose">
                  <option disabled selected>Choose</option>
                  <option value="Indigenous People & Cultural Communities">Indigenous People & Cultural Communities</option>
                  <option value="Victims of Survivor of Human Trafficking">Victims of Survivor of Human Trafficking</option>
                  <option value="Victims of Natural Disasters and Calamities">Victims of Natural Disasters and Calamities</option>
                  <option value="Drug Dependent Surrenderers / Surrenderees">Drug Dependent Surrenderers / Surrenderees</option>
                  <option value="Rebel Returnees or Decommissioned Combatants">Rebel Returnees or Decommissioned Combatants</option>
                  <option value="Inmates and Detainees">Inmates and Detainees</option>
                  <option value="Wounded-in-Action AFP & PNP Personnel">Wounded-in-Action AFP & PNP Personnel</option>
                  <option value="Family Members of AFP & PNP Wounded- in-Action">Family Members of AFP & PNP Wounded- in-Action</option>
                  <option value="Family Members of Inmates and Detainees">Family Members of Inmates and Detainees</option>
                  <option value="Uniformed Personnel">Uniformed Personnel</option>
                  <option value="Victims of Human Rights or their Authorized Beneficiaries">Victims of Human Rights or their Authorized Beneficiaries</option>            
                </select>
              </div>
              </div>

              <br>

              <div class="row">
                <div class="col-12">
                  <h3 style="font-weight:600; font-size: 25px;">5. Type of Disability (for Persons with Disability Only): <span style="color:black; font-style: italic;">To be filled up by the TESDA personnel</span></h3>
                </div>
              </div>

              <div>
                <div class="row">
                  <div class="col-4">
                    <button class="button button1">Mental/Intellectual</button>
                  </div>
                </div>
              </div>

            <br>

            <div class="row">
              <div class="col-4"  style="border-right: solid; border-bottom: solid; border-top: solid; padding: 1%;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="TOD" id="" required value="Mental/Intellectual">
                  <label class="form-check-label" for="category1">Mental/Intellectual</label>
                </div>
              </div>
              <div class="col-4" style="border-right: solid; border-bottom: solid; border-top: solid; padding: 1%;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="TOD" id="" required value="Visual Disability">
                  <label class="form-check-label" for="category1">Visual Disability</label>
                </div>
              </div>
              <div class="col-4" style="border-bottom: solid; border-top: solid; padding: 1%;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="TOD" id="" required value="Orthopedic (Musculoskeletal) Disability">
                  <label class="form-check-label" for="category1">Orthopedic (Musculoskeletal) Disability</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-4"  style="border-right: solid; padding: 1%; ">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="TOD" id="" required value="Hearing Disability">
                  <label class="form-check-label" for="category1">Hearing Disability</label>
                </div>
              </div>
              <div class="col-4"  style="border-right: solid; padding: 1%;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="TOD" id="" required value="Speech Impairment">
                  <label class="form-check-label" for="category1">Speech Impairment</label>
                </div>
              </div>
              <div class="col-4" style="padding: 1%;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="TOD" id="" required value="Multiple Disabilities">
                  <label class="form-check-label" for="category1">Multiple Disabilities, <input type="text" class="form-control" placeholder="Specify" required name="Specify">  </label>
                </div>
              </div>
            </div>
            
            <div class="row">
            <div class="col-4"  style="border-right: solid; border-top: solid; border-bottom: solid; padding: 1%;">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="TOD" id="" required value="Psychosocial Disability">
                <label class="form-check-label" for="category1">Psychosocial Disability</label>
              </div>
            </div>
            <div class="col-4"  style="border-right: solid; border-top: solid; border-bottom: solid; padding: 1%;">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="TOD" id="" required value=">Disability Due to Chronic Illness">
                <label class="form-check-label" for="category1">Disability Due to Chronic Illness</label>
              </div>
            </div>
            <div class="col-4" style="border-bottom: solid; border-top: solid; border-bottom: solid; padding: 1%;">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="TOD" id="" required value="learning">
                <label class="form-check-label" for="category1">Learning Disability</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12" style=" border-bottom: solid; padding: 5px;">
              <h4 style="color:blue; text-align: left; font-weight:900;">6. Causes of Disability (for Persons with Disability Only)</h4>
            </div>
          </div>

          <div class="row" style=" border-bottom: solid;">
            <div class="col-4" style=" border-right: solid;">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="COD" id="" required value="congeinborn">
                <label class="form-check-label" for="category1">Congenital/Inborn</label>
              </div>
            </div>
            <div class="col-4"  style=" border-right: solid;">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="COD" id="" required value="illness">
                <label class="form-check-label" for="category1">Illness</label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="COD" id="" required value="injury">
                <label class="form-check-label" for="category1">Injury</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-8" style=" border-bottom: solid; padding: 5px; border-right: solid;">
              <h4 style="color:blue; text-align: left; font-weight:900;">7. Taken NCAE/YP4SC Before?</h4>
            </div>
            <div class="col-2" style=" border-bottom: solid; padding: 5px; border-right: solid;">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="NCAE" id="" required value="YES">
                <label class="form-check-label" for="category1">Yes</label>
              </div>
            </div>
            <div class="col-2" style=" border-bottom: solid; padding: 5px;">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="NCAE" id="" required value="NO">
                <label class="form-check-label" for="category1">No</label>
              </div>
            </div>
          </div>
          <br>
          <div class="row" style=" border-bottom: solid;">
            <div class="col-8">
              <input type="text" class="form-control" placeholder="When:" required name="when"><br>
              <input type="text" class="form-control" placeholder="Where:" required name="where"><br>
            </div>
          </div>

          <div class="row">
            <div class="col-12" style=" border-bottom: solid; padding: 5px;">
              <h4 style="color:blue; text-align: left; font-weight:900;">8. Name of Course/Qualification</h4>
            </div>
          </div>

          <div class="row">
            <div class="col-12" style=" border-bottom: solid; padding: 5px;">
              <h4 style="color:blue; text-align: left; font-weight:900;">9. If  Scholar, What Type of Scholarship Package <span style="color:black;">(TWSP, PESFA, STEP, others?)</span> </h4>
            </div>
          </div>

          <div class="row">
            <div class="col-12" style=" border-bottom: solid; padding: 5px;">
              <h4 style="color:blue; text-align: left; font-weight:900;">10. Privacy Disclaimer</h4>
            </div>
          </div>

          <div class="row">
            <div class="col-12" style=" border-bottom: solid; padding: 5px;">
              <h4 style="color:blue; text-align: left; font-weight:900; font-style: italic; color: black;">I hereby allow TESDA to use/post my contact details, name, email cellphone/land nos. and other information I
                  provided which may be used for processing of my scholarship application, for employment opportunities and other
                  purposes.
              </h4>
            </div>
            <div class="col-6" style=" border-bottom: solid; padding: 5px; border-right: solid;">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="injury" id="" required value="injury">
                <label class="form-check-label" for="category1">Agree</label>
              </div>
            </div>
            <div class="col-6" style=" border-bottom: solid; padding: 5px;">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="injury" id="" required value="injury">
                <label class="form-check-label" for="category1">Disagree</label>
              </div>
            </div>
          </div>




        </form>
          </div>
        </div>
  </section><!-- End Portfolio Section -->
  </main><!-- End #main -->
    </div>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function() {

    //Employment Status
    $('input:radio[name="EmpStat"]').change(function() {
        if (this.value == 'Employed') {
          $('input:radio[name="EmpTag"]').attr("disabled",false);
          $('input[name="NatureBusiness"]').attr("disabled",true);
          $('input[name="NatureBusiness"]').val("");
        }
        else if (this.value == 'Unemployed') {
          $('input:radio[name="EmpTag"]').attr("disabled",true);
          $('input[name="NatureBusiness"]').attr("disabled",true);
          $('input:radio[name="EmpTag"]').prop('checked', false);
          $('input[name="NatureBusiness"]').val("");
        }
        else if (this.value == 'Self-employed') {
          $('input:radio[name="EmpTag"]').attr("disabled",true);
          $('input[name="NatureBusiness"]').attr("disabled",false);
          $('input:radio[name="EmpTag"]').prop('checked', false);
        }
    });

  });
</script>
@endsection
