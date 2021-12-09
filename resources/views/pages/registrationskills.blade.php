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
<main id="main">
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container mt-5"  style="max-width: 70% !important; box-shadow: 1px 0px 5px 5px #888888; border-radius: 5px; background-color:#FFFAFA; ">

      <div class="section-title">
        <div class="row" style=" border-bottom: solid;">
          <div class="col-2">
            <img src="{{asset('/img/sklogo.png')}}"style="width:40%;" />
          </div>
          <div class="col-10">
            <h3 style="font-size:25px;"><span style="font-weight:800;">Technical Education and Skills Development Authority</span><br>
            Pangasiwaan sa Edukasyong Teknikal at Pagpapaunlad ng Kasanayan</h3>
          </div>
        </div>
        <div class="row" style=" border-bottom: solid;">
          <div class="col-12">
            <h3 style="font-size:50px;"><span style="font-weight:900;">Regristration Form</h3>
          </div>
        </div>
        <div class="row mt-5" style=" border-bottom: solid;">
          <div class="col-9">
              <h3 style="font-size:30px; font-weight:900;">LEARNERS PROFILE FORM</h3>
          </div>
          <div class="col-3">
            <img src="{{asset('/img/sklogo.png')}}"style="width:30%;" />
            <form action="/action_page.php">
              <input type="file" id="myFile" name="filename">
            
          </div>
        </div>
        <div class="row">
          <div class="col-12" style=" border-bottom: solid; padding: 5px;">
            <h4 style="color:blue; text-align: left; font-weight:900;">1. Web-Based Information System Auto Generated</h4>
          </div>
        </div>
        <div class="row" style=" border-bottom: solid;">
          <div class="col-5">
            <p style="text-align: left;  text-indent: 30px;">1.1 Unique Learner Identifier (ULI) Number:</p>
          </div>
          <div class="col-7">

          </div>
        </div>
        <div class="row">
          <div class="col-12" style=" border-bottom: solid; padding: 5px;">
            <h4 style="color:blue; text-align: left; font-weight:900;">2. Manpower Profile</h4>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-5 mt-5">
            <p style="text-align: left;  text-indent: 30px;">2.1 Name</p>
          </div>
          <div class="col-7">
            <input type="text" class="form-control" placeholder="Last Name, Extension Name (Jr., Sr)" required name="lname"><br>
            <input type="text" class="form-control" placeholder="First Name" required name="fname"><br>
            <input type="text" class="form-control" placeholder="Middle Name" required name="mname">
          </div>
        </div>

        <div class="row mt-3" style=" border-bottom: solid;">
          <div class="col-5 mt-5">
            <p style="text-align: left;  text-indent: 30px;">2.2 Complete Permanent Mailing Address</p>
          </div>
          <div class="col-4">
            <input type="text" class="form-control" placeholder="Number, Street" required name="street"><br>
            <input type="text" class="form-control" placeholder="District" required name="district"><br>
          </div>
          <div class="col-3">
            <input type="text" class="form-control" placeholder="Barangay" required name="brgy"><br>
            <input type="text" class="form-control" placeholder="City/Municipality" required name="city"><br>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-5">
                  <!-- for spacing -->
              </div>
              <div class="col-3">
                <input type="text" class="form-control" placeholder="Email Address/Facebook Account" required name="email">
              </div>
              <div class="col-2">
                <input type="text" class="form-control" placeholder="Contact No." required name="contact_no">
              </div>
              <div class="col-2">
                <input type="text" class="form-control" placeholder="Nationality" required name="nationality">
              </div>
            </div>
            <br>
          </div>
        </div>

        <div class="row">
          <div class="col-12" style=" border-bottom: solid; padding: 5px;">
            <h4 style="color:blue; text-align: left; font-weight:900;">3. Personal Information:</h4>
          </div>
        </div>
        <div class="row" style="border-bottom: solid;">
          <div class="col-4" style="border-right: solid;">
              <p style="text-align: left;  text-indent: 30px;">3.1 Gender</p><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="" required value="Male">
                <label class="form-check-label" for="category1">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="" required value="Female">
                <label class="form-check-label" for="category1">Female</label>
              </div>
          </div>
          <div class="col-4" style="border-right: solid;">
              <p style="text-align: left;  text-indent: 30px;">3.2 Civil Status</p><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="CivStat" id="" required value="Single">
                <label class="form-check-label" for="category1">Single</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="CivStat" id="" required value="Widow">
                <label class="form-check-label" for="category1">Widow</label>
              </div><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="CivStat" id="" required value="Married">
                <label class="form-check-label" for="category1">Married</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="CivStat" id="" required value="Separated">
                <label class="form-check-label" for="category1">Separated</label>
              </div>
          </div>
          <div class="col-4">
              <p style="text-align: left;  text-indent: 30px;">3.3 Employment Status</p><br>
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
        <div class="row" style=" border-bottom: solid; padding: 5px;">
          <div class="col-4">
            <p style="font-size: 20px; text-align: left;  text-indent: 30px;">3.4 Birthdate</p>
          </div>
          <div class="col-3">
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
          <div class="col-2">
            <input type="number" class="form-control" placeholder="Day of Birth" required name="dayofbirth" min="1" max="31">
          </div>
          <div class="col-2">
            <input type="number" class="form-control" placeholder="Year of Birth" required name="yearofbirth" min="1900">
          </div>
          <div class="col-1">
            <input type="text" class="form-control" placeholder="Age" required name="age">
          </div>
        </div>

        <div class="row" style=" border-bottom: solid; padding: 5px;">
          <div class="col-4">
            <p style="font-size: 20px; text-align: left;  text-indent: 30px;">3.5 Birthplace</p>
          </div>
          <div class="col-3">
            <input type="text" class="form-control" placeholder="City/Municipality" required name="City/Municipality">
          </div>
          <div class="col-2">
            <input type="text" class="form-control" placeholder="Province" required name="Province">
          </div>
          <div class="col-3">
            <input type="text" class="form-control" placeholder="Region" required name="Region">
          </div>
        </div>

          <div class="row">
            <div class="col-12" style=" border-bottom: solid; padding: 5px;">
              <p style="font-size: 20px; text-align: left;  text-indent: 45px;">3.6 Educational Attainment</p>
            </div>
          </div>
            <div class="row" style=" border-bottom: solid;">
              <div class="col-4" style="border-right: solid;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="EducAttain" id="" required value="nogradecom">
                  <label class="form-check-label" for="category1">No Grade Completed</label>
                </div>
              </div>
              <div class="col-3" style="border-right: solid;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="EducAttain" id="" required value="elemgrad">
                  <label class="form-check-label" for="category1">Elementary Graduate</label>
                </div>
              </div>
              <div class="col-3" style="border-right: solid;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="EducAttain" id="" required value="elemundergrad">
                  <label class="form-check-label" for="category1">Elementary Undergraduate</label>
                </div>
              </div>
              <div class="col-2">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="EducAttain" id="" required value="collegeundergrad">
                  <label class="form-check-label" for="category1">College Undergraduate</label>
                </div>
              </div>
            </div>

            <div class="row" style=" border-bottom: solid;">
              <div class="col-4" style="border-right: solid;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="EducAttain" id="" required value="hsgrad">
                  <label class="form-check-label" for="category1">High School Graduate</label>
                </div>
              </div>
              <div class="col-3" style="border-right: solid;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="EducAttain" id="" required value="hsundergrad">
                  <label class="form-check-label" for="category1">High School Graduate Undergraduate</label>
                </div>
              </div>
              <div class="col-3" style="border-right: solid;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="EducAttain" id="" required value="collegegrad">
                  <label class="form-check-label" for="category1">College Graduate</label>
                </div>
              </div>
              <div class="col-2">

              </div>
            </div>
            <div class="row">
              <div class="col-6" style=" border-bottom: solid; padding: 5px; border-right: solid;">
                <p style="font-size: 20px; text-align: left;  text-indent: 45px;">3.7 Mother's Name</p>
                <input type="text" class="form-control" placeholder="Mother's Name" required name="mothername">
              </div>
              <div class="col-6" style=" border-bottom: solid; padding: 5px;">
                <p style="font-size: 20px; text-align: left;  text-indent: 45px;">3.7 Father's Name</p>
                <input type="text" class="form-control" placeholder="Father's Name" required name="fathername">
              </div>
            </div>

            <div class="row" style="border-bottom: solid;">
              <div class="col-12" style=" border-bottom: solid; padding: 5px;">
                <h4 style="color:blue; text-align: left; font-weight:900;">4. Learner/Trainee/Student (Clients) Classification:</h4>
            </div>
              <div class="col-8" style="border-right: solid; border-bottom: solid;">
                <div class="col-12">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="Student">
                    <label class="form-check-label" for="category1">Student</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="infowork">
                    <label class="form-check-label" for="category1">Informal Worker</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="outstudent">
                    <label class="form-check-label" for="category1">Out-of-Student Youth</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="induswork">
                    <label class="form-check-label" for="category1">Industry Worker</label>
                  </div>
                </div>
              </div>
              <div class="col-4" style="border-bottom: solid;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="ClientClass" id="" required value="indi">
                  <label class="form-check-label" for="category1">Indigenous People & Cultural Communities </label>
                </div>
              </div>

              <div class="col-8" style="border-right: solid; border-bottom: solid;">
                <div class="col-12">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="soloparent">
                    <label class="form-check-label" for="category1">Solo Parent</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="cooperatives">
                    <label class="form-check-label" for="category1">Cooperatives</label>
                  </div>
                </div>
              </div>
              <div class="col-4" style="border-bottom: solid;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="ClientClass" id="" required value="victims">
                  <label class="form-check-label" for="category1">Victims of Survivor of Human Trafficking </label>
                </div>
              </div>

              <div class="col-8" style="border-right: solid; border-bottom: solid;">
                <div class="col-12">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="solo">
                    <label class="form-check-label" for="category1">Solo Parent's Children</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="famenter">
                    <label class="form-check-label" for="category1">Family Enterprises</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="unifper">
                    <label class="form-check-label" for="category1">Uniformed Personnel</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="fammicro">
                    <label class="form-check-label" for="category1">Family Members of Microentrepreneurs</label>
                  </div>
                </div>
              </div>
              <div class="col-4" style="border-bottom: solid;" >
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="ClientClass" id="" required value="indi">
                  <label class="form-check-label" for="category1">Victims of Natural Disasters and
                         Calamities
                  </label>
                </div>
              </div>

            <div class="col-8" style="border-right: solid; border-bottom: solid;">
                <div class="col-12">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="lgunits">
                    <label class="form-check-label" for="category1">Local Government Units (CTECs)</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="farmfish">
                    <label class="form-check-label" for="category1">Farmers and Fishermen</label>
                  </div>
                </div>
              </div>
              <div class="col-4" style="border-bottom: solid;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="ClientClass" id="" required value="drugdepen">
                  <label class="form-check-label" for="category1">Drug Dependent Surrenderers /
                         Surrenderees
                  </label>
                </div>
              </div>

              <div class="col-8" style="border-right: solid; border-bottom: solid;">
                <div class="col-12">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="displaced">
                    <label class="form-check-label" for="category1">Displaced HEIs Teaching Personnel</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="famfarmfish">
                    <label class="form-check-label" for="category1">Family Members of Farmers and Fishermen</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="informal">
                    <label class="form-check-label" for="category1">Informal Settler</label>
                  </div>
                </div>
              </div>
              <div class="col-4" style="border-bottom: solid;" >
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="ClientClass" id="" required value="rebel">
                  <label class="form-check-label" for="category1">Rebel Returnees or Decommissioned
                         Combatants
                  </label>
                </div>
              </div>

              <div class="col-8" style="border-right: solid; border-bottom: solid;">
                <div class="col-12">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="displacedworkers">
                    <label class="form-check-label" for="category1">Displaced Workers</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="employedworkers ">
                    <label class="form-check-label" for="category1">Currently Employed Workers</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="fisherfolks">
                    <label class="form-check-label" for="category1">Fisherfolks</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="comm">
                    <label class="form-check-label" for="category1">Community Training & Employment Coordinator </label>
                  </div>
                </div>
              </div>
              <div class="col-4" style="border-bottom: solid;" >
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="ClientClass" id="" required value="inmates">
                  <label class="form-check-label" for="category1">Inmates and Detainees</label>
                </div>
              </div>

              <div class="col-8" style="border-right: solid; border-bottom: solid;">
                <div class="col-12">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="emp">
                    <label class="form-check-label" for="category1">Employees w/ Contractual/Job Order
                           Status
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="4p ">
                    <label class="form-check-label" for="category1">4ps Beneficiary</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="tvet">
                    <label class="form-check-label" for="category1">TVET Trainers</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="ofw">
                    <label class="form-check-label" for="category1">Returning/repatriated OFWs </label>
                  </div>
                </div>
              </div>
              <div class="col-4" style="border-bottom: solid;" >
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="ClientClass" id="" required value="wounded">
                  <label class="form-check-label" for="category1">Wounded-in-Action AFP & PNP Personnel</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="ClientClass" id="" required value="fammem">
                  <label class="form-check-label" for="category1">Family Members of AFP & PNP Wounded-
                         in-Action
                  </label>
                </div>
              </div>

              <div class="col-8" style="border-right: solid; border-bottom: solid;">
                <div class="col-12">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="urbanrural">
                    <label class="form-check-label" for="category1">Urban and Rural Poor</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="ofwdept">
                    <label class="form-check-label" for="category1">OFW Dependent</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="agrreform">
                    <label class="form-check-label" for="category1">Agrarian Reform Beneficiary</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="msme">
                    <label class="form-check-label" for="category1">MSMEs</label>
                  </div>
                </div>
              </div>
              <div class="col-4" style="border-bottom: solid;" >
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="ClientClass" id="" required value="fammemdetain">
                  <label class="form-check-label" for="category1">Family Members of Inmates and Detainees</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="ClientClass" id="" required value="uniperson">
                  <label class="form-check-label" for="category1">Uniformed Personnel</label>
                </div>
              </div>

              <div class="col-8" style="border-right: solid;">
                <div class="col-12">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="rcefresp">
                    <label class="form-check-label" for="category1">RCEF - RESP</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ClientClass" id="" required value="afppnp">
                    <label class="form-check-label" for="category1">Family Members of AFP & PNP Killed-in  Action</label>
                  </div>
                </div>
                <div class="col-12">

                </div>
              </div>
              <div class="col-4">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="ClientClass" id="" required value="wounded">
                  <label class="form-check-label" for="category1">Victims of Human Rights or their
                         Authorized Beneficiaries
                  </label>
                </div>
              </div>
            </div>


          <div class="row">
            <div class="col-12" style=" border-bottom: solid; padding: 5px;">
              <h4 style="color:blue; text-align: left; font-weight:900;">5. Type of Disability (for Persons with Disability Only): <span style="color:black; font-style: italic;">To be filled up by the TESDA personnel</span></h4>
            </div>
          </div>

          <div class="row" style=" border-bottom: solid;">
            <div class="col-4" style=" border-right: solid;">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="TOD" id="" required value="menintellec">
                <label class="form-check-label" for="category1">Mental/Intellectual</label>
              </div>
            </div>
            <div class="col-4"  style=" border-right: solid;">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="TOD" id="" required value="visualdis">
                <label class="form-check-label" for="category1">Visual Disability</label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="TOD" id="" required value="ortho">
                <label class="form-check-label" for="category1">Orthopedic (Musculoskeletal) Disability</label>
              </div>
            </div>
          </div>

          <div class="row" style=" border-bottom: solid;">
            <div class="col-4" style=" border-right: solid;">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="TOD" id="" required value="hearing">
                <label class="form-check-label" for="category1">Hearing Disability</label>
              </div>
            </div>
            <div class="col-4"  style=" border-right: solid;">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="TOD" id="" required value="speech">
                <label class="form-check-label" for="category1">Speech Impairment</label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="TOD" id="" required value="multi">
                <label class="form-check-label" for="category1">Multiple Disabilities, specify  ____________</label>
              </div>
            </div>
          </div>

          <div class="row" style=" border-bottom: solid;">
          <div class="col-4" style=" border-right: solid;">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="TOD" id="" required value="psycho">
              <label class="form-check-label" for="category1">Psychosocial Disability</label>
            </div>
          </div>
          <div class="col-4"  style=" border-right: solid;">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="TOD" id="" required value="chronic">
              <label class="form-check-label" for="category1">Disability Due to Chronic Illness</label>
            </div>
          </div>
          <div class="col-4">
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

        <div class="row">
          <div class="col-12" style=" border-bottom: solid; padding: 5px;">
            <h4 style="color:blue; text-align: left; font-weight:900;">11. Applicant's Signature</h4>
          </div>
        </div>

        <div class="row" style=" border-bottom: solid; padding: 5px;">
          <div class="col-8">
            <h4 style="color:black; font-size: 20px; text-align: center; font-style: italic; font-weight:500;">This is to certify that the information stated above is true and correct</h4>
            <div class="row" style="padding-top: 20%;">
              <div class="col-6">
                <h4 style="text-decoration: overline; text-align: left; font-size: 20px; font-weight:800;">Signature over Printed Name</h4>
              </div>
              <div class="col-6">
                <h4 style="text-decoration: overline; text-align: left; font-size: 20px; font-weight:800;">DATE ACCOMPLISHED</h4>
              </div>
            </div>
            <div class="row" style="padding-top: 20%;">
              <div class="col-6">
                <h4 style=" text-indent: 15px; text-decoration: overline; text-align: left; font-size: 20px; font-weight:800;">OFFICER OF THE DAY</h4>
                <p style="text-align: left; ">(Signature Over Printed Name)</p>
              </div>
              <div class="col-6">
                <h4 style="text-decoration: overline; text-align: left; font-size: 20px; font-weight:800;">DATE RECEIVED</h4>
              </div>
            </div>
          </div>
          <div class="col-4 mt-5">
            <div class="bbm"style=" width: 50%; height: 40%; border: 1px solid black; padding:20px;">
              <p>1 X 1 picture taken within the last 6 months</p>
            </div><br>
            <div class="bbm"style=" width: 50%; height: 40%; border: 1px solid black; padding:20px;">
            </div>
            <p style="text-align:left; text-indent:40px; ">Right Thumbmark</p>
          </div>
        </div>


      </form>
        </div>
      </div>
</section><!-- End Portfolio Section -->
</main><!-- End #main -->
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
