<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="{base_url()}/images/wit-favicon.ico" type="image/x-icon">
  <title>VIPANANWiT | DASHBOARD WiT</title>
  <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="{base_url()}/styles/parsley.css?v={jsversion()}" />
  <link href="{base_url()}/styles/wit_job_dashboard.css?v={jsversion()}" rel="stylesheet" />
  <link href="{base_url()}/styles/wit_job_dashboard_two.css?v={jsversion()}" rel="stylesheet" />
  <link rel="stylesheet" href="{base_url()}/styles/vipanan_add_companies.css?v={jsversion()}" />
  <style>
    .form-control:focus {
      color: #495057 !important;
      background-color: #fff !important;
      border-color: #1e3262 !important;
      outline: 0 !important;
      box-shadow: 0 0 0 0.1rem rgba(30, 50, 98, 0.25) !important;
    }

    .parsley-errors-list {
      margin: 6px 0 3px !important;
    }

    input.parsley-error,
    select.parsley-error,
    textarea.parsley-error {
      color: #b94a48;
      background-color: #8080801f !important;
      border: 1px solid #8080801f !important;
    }
  </style>
</head>

<body>
  <div class="loader"></div>
  <input type="hidden" baseUrl="{base_url()}/vipanan" class="baseUrl">
  <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
    <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
      data-target="#sidebar">
      <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
    </a>
    <a class="logo bg-white" href={base_url()}><img src="images/witlogo-dashboard-logo.jpeg" width="100" height="60"
        tyle="max-width:100%; height:auto;
                alt=" wit-logo" /></a>
    <button class="navbar-toggler navbar-icon waves-effect waves-light" type="button" data-toggle="collapse"
      data-target="#navbarNav"><i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav navbar-toolbar ml-auto">
        <li>
          <div class="logOutBtn nav-link  waves-effect waves-light">LOGOUT
          </div>
        </li>
      </ul>
    </div>
  </header>
  <div id="sidebar" class="sidenav sidenav-fixed expand-lg" style="border-right:1px solid gray;">
    <div class="mt-5 pt-5 pl-3">
      <nav class="nav flex-column nav-pills">
        <a class="nav-link" href="{base_url()}/vipanan_wit_dashboard">Dashboard</a>
        <a class="nav-link active" href="{base_url()}/vipanan_add_companies">Add Companies</a>
      </nav>
    </div>
  </div>

  <!-- ******************************************************* -->
  <div class="docs-content-wrapper border border-dark">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="container">
            <div class="row">
              <div class="col-sm-2"></div>
              <div class="col-sm-8">
                <div class="row">
                  <div class="col-sm-12 py-4">
                    <form id="demo-form" data-parsley-validate="">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="fname">FirstName<span class="text-danger">*</span></label>
                          <input type="text" class="form-control fname" id="fname" name="fname"
                            data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" required />
                        </div>
                        <div class="form-group col-md-6">
                          <label for="lname">LastName<span class="text-danger">*</span></label>
                          <input type="text" class="form-control lname" id="lname" name="lname"
                            data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" required />
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Email<span class="text-danger">*</span></label>
                          <input type="email" class="form-control email" id="inputEmail4" name="email"
                            data-parsley-type="email" data-parsley-trigger="keyup" required />
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Password<span class="text-danger">*</span></label>
                          <input type="password" class="form-control password" id="inputPassword4" name="passowrd"
                            data-parsley-minlength="8" data-parsley-uppercase="1" data-parsley-lowercase="1"
                            data-parsley-number="1" data-parsley-special="1" data-parsley-trigger="keyup" required />
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="designation">Designation<span class="text-danger">*</span></label>
                        <input type="text" class="form-control designation" id="designation" required />
                      </div>

                      <div class="form-row">
                        <div class="form-group col-sm-6">
                          <label for="inputAddress">Alternate Email<span class="text-danger">*</span></label>
                          <input type="email" class="form-control alternateemail" id="inputAddress"
                            data-parsley-type="email" data-parsley-trigger="keyup" required />
                        </div>
                        <div class="col-sm-6">
                          <label for="contact">Contact<span class="text-danger">*</span></label>
                          <div class="input-group mb-5">
                            <div class="input-group-prepend">
                              <span class="input-group-text px-3 py-0">+ 91</span>
                            </div>
                            <input type="text" class="form-control contact" id="contact" name="contact" minlength="10"
                              data-parsley-type="digits" data-parsley-trigger="keyup" required />
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="organizationnname">Organization Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control orgname" id="organizationnname" required />
                      </div>
                      <div class="form-group">
                        <label for="organizationdes">Organization Description<span class="text-danger">*</span></label>
                        <textarea class="form-control orgdes" rows="3" id="organizationdes" required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="gstnumber">GST Number<span class="text-danger">*</span></label>
                        <input type="text" class="form-control orggstnum" id="gstnumber" required />
                      </div>

                      <div class="form-group">
                        <label for="organizationnumber">Office Number<span class="text-danger">*</span></label>
                        <input type="text" class="form-control orgnum" id="organizationnumber" required />
                      </div>



                      <div class="form-group">
                        <label for="orgnizationaddress">Organization Address<span class="text-danger">*</span></label>
                        <textarea class="form-control orgaddress" rows="2" id="orgnizationaddress" required></textarea>
                      </div>
                      <div class="form-row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="state">State<span class="text-danger">*</span></label>
                            <select class="form-control orgstate" id="countrySelect" size="1"
                              onchange="makeSubmenu(this.value)" required>
                              <option value="" disabled selected>Choose State</option>
                              <option value="West_Bengal">West Bengal</option>
                              <option value="Andhra_Pradesh">Andhra Pradesh</option>
                              <option value="Chandigarh">Chandigarh</option>
                              <option value="Goa">Goa</option>
                              <option value="Delhi">Delhi</option>
                              <option value="Haryana">Haryana</option>
                              <option value="Karnataka">Karnataka</option>
                              <option value="Madhya_Pradesh">Madhya Pradesh</option>
                              <option value="Maharashtra">Maharashtra</option>
                              <option value="Tamil_Nadu">Tamil Nadu</option>
                              <option value="Uttar_Pradesh">Uttar Pradesh</option>
                              <option value="Telangana">Telangana</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="city">City<span class="text-danger">*</span></label>
                            <select class="form-control orgcity" id="citySelect" size="1" required>
                              <option value="" selected="true" disabled="disabled">Select City</option>
                              <option></option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="zip">Zip<span class="text-danger">*</span></label>
                            <input type="text" class="form-control orgpin" id="zip" data-parsley-type="digits"
                              data-parsley-trigger="keyup" required />
                          </div>
                        </div>
                      </div>

                      <button type="submit"
                        class="btn witBtn px-5 mt-4 waves-effect waves-light text-white vipananaddcompanyDetails">
                        ADD COMPANY
                      </button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-sm-2"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/validate-js/2.0.1/validate.min.js"
    integrity="sha256-FtvY52LIDZ2/QHmDNay6PTYvLlRsZICHak0iJEAIBuM=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
  <script src="{base_url()}/js/smoothscroll.js?v={jsversion()}"></script>
  <script type="text/javascript">
    $(window).on('load resize', function () {
      if ($(this).outerWidth() < 992) {
        //768
        $('body')
          .removeClass('sidebar-collapsed')
          .addClass('drawer-sidebar');
      } else {
        $('body').removeClass('drawer-sidebar');
      }
    });

    $(function () {
      $('.js-sidebar-toggler').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        if ($('body').hasClass('drawer-sidebar')) {
          $('#sidebar').backdrop();
        } else {
          $('body').toggleClass('sidebar-collapsed');
        }
      });

      var scroll = new SmoothScroll('a[href*="#"][scroll-href]');

      $('select.md-select').formSelect();
    });
  </script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#example').DataTable();
    });
  </script>
  <script>
    var citiesByState = {
      "Andaman and Nicobar Islands": ["Port Blair*"],
      "Andhra Pradesh": ["Adoni", "Amalapuram", "Anakapalle", "Anantapur", "Bapatla", "Bheemunipatnam", "Bhimavaram", "Bobbili", "Chilakaluripet", "Chirala", "Chittoor", "Dharmavaram", "Eluru", "Gooty", "Gudivada", "Gudur", "Guntakal", "Guntur", "Hindupur", "Jaggaiahpet", "Jammalamadugu", "Kadapa", "Kadiri", "Kakinada", "Kandukur", "Kavali", "Kovvur", "Kurnool", "Macherla", "Machilipatnam", "Madanapalle", "Mandapeta", "Markapur", "Nagari", "Naidupet", "Nandyal", "Narasapuram", "Narasaraopet", "Narsipatnam", "Nellore", "Nidadavole", "Nuzvid", "Ongole", "Palacole", "Palasa Kasibugga", "Parvathipuram", "Pedana", "Peddapuram", "Pithapuram", "Ponnur", "Proddatur", "Punganur", "Puttur", "Rajahmundry", "Rajam", "Rajampet", "Ramachandrapuram", "Rayachoti", "Rayadurg", "Renigunta", "Repalle", "Salur", "Samalkot", "Sattenapalle", "Srikakulam", "Srikalahasti", "Srisailam Project (Right Flank Colony) Township", "Sullurpeta", "Tadepalligudem", "Tadpatri", "Tanuku", "Tenali", "Tirupati", "Tiruvuru", "Tuni", "Uravakonda", "Venkatagiri", "Vijayawada", "Vinukonda", "Visakhapatnam", "Vizianagaram", "Yemmiganur", "Yerraguntla"],
      // ******************
      "Arunachal Pradesh": ["Naharlagun", "Pasighat"],
      // **************
      "Assam": ["Barpeta", "Bongaigaon City", "Dhubri", "Dibrugarh", "Diphu", "Goalpara", "Guwahati", "Jorhat", "Karimganj", "Lanka", "Lumding", "Mangaldoi", "Mankachar", "Margherita", "Mariani", "Marigaon", "Nagaon", "Nalbari", "North Lakhimpur", "Rangia", "Sibsagar", "Silapathar", "Silchar", "Tezpur", "Tinsukia"],
      // ******************
      "Bihar": ["Araria", "Arrah", "Arwal", "Asarganj", "Aurangabad", "Bagaha", "Barh", "Begusarai", "Bettiah", "Bhabua", "Bhagalpur", "Buxar", "Chhapra", "Darbhanga", "Dehri-on-Sone", "Dumraon", "Forbesganj", "Gaya", "Gopalganj", "Hajipur", "Jamalpur", "Jamui", "Jehanabad", "Katihar", "Kishanganj", "Lakhisarai", "Lalganj", "Madhepura", "Madhubani", "Maharajganj", "Mahnar Bazar", "Makhdumpur", "Maner", "Manihari", "Marhaura", "Masaurhi", "Mirganj", "Mokameh", "Motihari", "Motipur", "Munger", "Murliganj", "Muzaffarpur", "Narkatiaganj", "Naugachhia", "Nawada", "Nokha", "Patna*", "Piro", "Purnia", "Rafiganj", "Rajgir", "Ramnagar", "Raxaul Bazar", "Revelganj", "Rosera", "Saharsa", "Samastipur", "Sasaram", "Sheikhpura", "Sheohar", "Sherghati", "Silao", "Sitamarhi", "Siwan", "Sonepur", "Sugauli", "Sultanganj", "Supaul", "Warisaliganj"],
      // ***************
      "Chandigarh": ["Chandigarh"],
      // ***
      "Chhattisgarh": ["Ambikapur", "Bhatapara", "Bhilai Nagar", "Bilaspur", "Chirmiri", "Dalli-Rajhara", "Dhamtari", "Durg", "Jagdalpur", "Korba", "Mahasamund", "Manendragarh", "Mungeli", "Naila Janjgir", "Raigarh", "Raipur*", "Rajnandgaon", "Sakti", "Tilda Newra"],
      // ****************
      "Dadra and Nagar Haveli": ["Silvassa*"],
      // ************
      "Delhi": ["Delhi", "New Delhi"],
      // ***********
      "Goa": ["Mapusa", "Margao", "Marmagao", "Panaji"],
      // **********
      "Gujarat": ["Adalaj", "Ahmedabad", "Amreli", "Anand", "Anjar", "Ankleshwar", "Bharuch", "Bhavnagar", "Bhuj", "Chhapra", "Deesa", "Dhoraji", "Godhra", "Jamnagar", "Kadi", "Kapadvanj", "Keshod", "Khambhat", "Lathi", "Limbdi", "Lunawada", "Mahesana", "Mahuva", "Manavadar", "Mandvi", "Mangrol", "Mansa", "Mahemdabad", "Modasa", "Morvi", "Nadiad", "Navsari", "Padra", "Palanpur", "Palitana", "Pardi", "Patan", "Petlad", "Porbandar", "Radhanpur", "Rajkot", "Rajpipla", "Rajula", "Ranavav", "Rapar", "Salaya", "Sanand", "Savarkundla", "Sidhpur", "Sihor", "Songadh", "Surat", "Talaja", "Thangadh", "Tharad", "Umbergaon", "Umreth", "Una", "Unjha", "Upleta", "Vadnagar", "Vadodara", "Valsad", "Vapi", "Vapi", "Veraval", "Vijapur", "Viramgam", "Visnagar", "Vyara", "Wadhwan", "Wankaner"],
      // ************
      "Haryana": ["Bahadurgarh", "Bhiwani", "Charkhi Dadri", "Faridabad", "Fatehabad", "Gohana", "Gurgaon", "Hansi", "Hisar", "Jind", "Kaithal", "Karnal", "Ladwa", "Mahendragarh", "Mandi Dabwali", "Narnaul", "Narwana", "Palwal", "Panchkula", "Panipat", "Pehowa", "Pinjore", "Rania", "Ratia", "Rewari", "Rohtak", "Safidon", "Samalkha", "Sarsod", "Shahbad", "Sirsa", "Sohna", "Sonipat", "Taraori", "Thanesar", "Tohana", "Yamunanagar"],
      // ***************
      "Himachal Pradesh": ["Mandi", "Nahan", "Palampur", "Shimla*", "Solan", "Sundarnagar"],
      // ************
      "Jammu and Kashmir": ["Anantnag", "Baramula", "Jammu", "Kathua", "Punch", "Rajauri", "Sopore", "Srinagar*", "Udhampur"],
      // ******************

      "Jharkhand": ["Adityapur", "Bokaro Steel City", "Chaibasa", "Chatra", "Chirkunda", "Medininagar (Daltonganj)", "Deoghar", "Dhanbad", "Dumka", "Giridih", "Gumia", "Hazaribag", "Jamshedpur", "Jhumri Tilaiya", "Lohardaga", "Madhupur", "Mihijam", "Musabani", "Pakaur", "Patratu", "Phusro", "Ramgarh", "Ranchi*", "Sahibganj", "Saunda", "Simdega", "Tenu dam-cum-Kathhara"],
      // *************
      "Karnataka": ["Adyar", "Afzalpur", "Arsikere", "Athni", "Bengaluru", "Belagavi", "Ballari", "Chikkamagaluru", "Davanagere", "Gokak", "Hubli-Dharwad", "Karwar", "Kolar", "Lakshmeshwar", "Lingsugur", "Maddur", "Madhugiri", "Madikeri", "Magadi", "Mahalingapura", "Malavalli", "Malur", "Mandya", "Mangaluru", "Manvi", "Mudalagi", "Mudabidri", "Muddebihal", "Mudhol", "Mulbagal", "Mundargi", "Nanjangud", "Nargund", "Navalgund", "Nelamangala", "Pavagada", "Piriyapatna", "Puttur", "Rabkavi Banhatti", "Raayachuru", "Ranebennuru", "Ramanagaram", "Ramdurg", "Ranibennur", "Robertson Pet", "Ron", "Sadalagi", "Sagara", "Sakaleshapura", "Sindagi", "Sanduru", "Sankeshwara", "Saundatti-Yellamma", "Savanur", "Sedam", "Shahabad", "Shahpur", "Shiggaon", "Shikaripur", "Shivamogga", "Surapura", "Shrirangapattana", "Sidlaghatta", "Sindhagi", "Sindhnur", "Sira", "Sirsi", "Siruguppa", "Srinivaspur", "Tarikere", "Tekkalakote", "Terdal", "Talikota", "Tiptur", "Tumkur", "Udupi", "Vijayapura", "Wadi", "Yadgir"],

      // ****************
      // "Karnatka": ["Mysore", "Bangalore", "Mangalore"],

      // ***********
      "Kerala": ["Adoor", "Alappuzha", "Attingal", "Chalakudy", "Changanassery", "Cherthala", "Chittur-Thathamangalam", "Guruvayoor", "Kanhangad", "Kannur", "Kasaragod", "Kayamkulam", "Kochi", "Kodungallur", "Kollam", "Kottayam", "Kozhikode", "Kunnamkulam", "Malappuram", "Mattannur", "Mavelikkara", "Mavoor", "Muvattupuzha", "Nedumangad", "Neyyattinkara", "Nilambur", "Ottappalam", "Palai", "Palakkad", "Panamattom", "Panniyannur", "Pappinisseri", "Paravoor", "Pathanamthitta", "Peringathur", "Perinthalmanna", "Perumbavoor", "Ponnani", "Punalur", "Puthuppally", "Koyilandy", "Shoranur", "Taliparamba", "Thiruvalla", "Thiruvananthapuram", "Thodupuzha", "Thrissur", "Tirur", "Vaikom", "Varkala", "Vatakara"],
      // **************

      "Madhya_Pradesh": ["Alirajpur", "Ashok Nagar", "Balaghat", "Bhopal", "Ganjbasoda", "Gwalior", "Indore", "Itarsi", "Jabalpur", "Lahar", "Maharajpur", "Mahidpur", "Maihar", "Malaj Khand", "Manasa", "Manawar", "Mandideep", "Mandla", "Mandsaur", "Mauganj", "Mhow Cantonment", "Mhowgaon", "Morena", "Multai", "Mundi", "Murwara (Katni)", "Nagda", "Nainpur", "Narsinghgarh", "Narsinghgarh", "Neemuch", "Nepanagar", "Niwari", "Nowgong", "Nowrozabad (Khodargama)", "Pachore", "Pali", "Panagar", "Pandhurna", "Panna", "Pasan", "Pipariya", "Pithampur", "Porsa", "Prithvipur", "Raghogarh-Vijaypur", "Rahatgarh", "Raisen", "Rajgarh", "Ratlam", "Rau", "Rehli", "Rewa", "Sabalgarh", "Sagar", "Sanawad", "Sarangpur", "Sarni", "Satna", "Sausar", "Sehore", "Sendhwa", "Seoni", "Seoni-Malwa", "Shahdol", "Shajapur", "Shamgarh", "Sheopur", "Shivpuri", "Shujalpur", "Sidhi", "Sihora", "Singrauli", "Sironj", "Sohagpur", "Tarana", "Tikamgarh", "Ujjain", "Umaria", "Vidisha", "Vijaypur", "Wara Seoni"],
      // ***************
      "Maharashtra": ["Ahmednagar", "Akola", "Akot", "Amalner", "Ambejogai", "Amravati", "Anjangaon", "Arvi", "Aurangabad", "Bhiwandi", "Dhule", "Kalyan-Dombivali", "Ichalkaranji", "Kalyan-Dombivali", "Karjat", "Latur", "Loha", "Lonar", "Lonavla", "Mahad", "Malegaon", "Malkapur", "Mangalvedhe", "Mangrulpir", "Manjlegaon", "Manmad", "Manwath", "Mehkar", "Mhaswad", "Mira-Bhayandar", "Morshi", "Mukhed", "Mul", "Mumbai", "Greater Mumbai", "Murtijapur", "Nagpur", "Nanded-Waghala", "Nandgaon", "Nandura", "Nandurbar", "Narkhed", "Nashik", "Navi Mumbai", "Nawapur", "Nilanga", "Osmanabad", "Ozar", "Pachora", "Paithan", "Palghar", "Pandharkaoda", "Pandharpur", "Panvel", "Parbhani", "Parli", "Partur", "Pathardi", "Pathri", "Patur", "Pauni", "Pen", "Phaltan", "Pulgaon", "Pune", "Purna", "Pusad", "Rahuri", "Rajura", "Ramtek", "Ratnagiri", "Raver", "Risod", "Sailu", "Sangamner", "Sangli", "Sangole", "Sasvad", "Satana", "Satara", "Savner", "Sawantwadi", "Shahade", "Shegaon", "Shendurjana", "Shirdi", "Shirpur-Warwade", "Shirur", "Shrigonda", "Shrirampur", "Sillod", "Sinnar", "Solapur", "Soyagaon", "Talegaon Dabhade", "Talode", "Tasgaon", "Thane", "Tirora", "Tuljapur", "Tumsar", "Uchgaon", "Udgir", "Umarga", "Umarkhed", "Umred", "Uran", "Uran Islampur", "Vadgaon Kasba", "Vaijapur", "Vasai-Virar", "Vita", "Wadgaon Road", "Wai", "Wani", "Wardha", "Warora", "Warud", "Washim", "Yavatmal", "Yawal", "Yevla"],
      // *************

      "Manipur": ["Imphal", "Lilong", "Mayang Imphal", "Thoubal"],
      // *************
      "Meghalaya": ["Nongstoin", "Shillong", "Tura"],
      // ************
      "Mizoram": ["Aizawl", "Lunglei", "Saiha"],

      // *************
      "Nagaland": ["Dimapur", "Kohima", "Mokokchung", "Tuensang", "Wokha", "Zunheboto"],
      // ***********
      "Odisha": ["Balangir", "Baleshwar Town", "Barbil", "Bargarh", "Baripada Town", "Bhadrak", "Bhawanipatna", "Bhubaneswar", "Brahmapur", "Byasanagar", "Cuttack", "Dhenkanal", "Jatani", "Jharsuguda", "Kendrapara", "Kendujhar", "Malkangiri", "Nabarangapur", "Paradip", "Parlakhemundi", "Pattamundai", "Phulabani", "Puri", "Rairangpur", "Rajagangapur", "Raurkela", "Rayagada", "Sambalpur", "Soro", "Sunabeda", "Sundargarh", "Talcher", "Tarbha", "Titlagarh"],
      // ****************
      "Puducherry": ["Karaikal", "Mahe", "Pondicherry", "Yanam"],

      // ************
      "Punjab": ["Amritsar", "Barnala", "Batala", "Bathinda", "Dhuri", "Faridkot", "Fazilka", "Firozpur", "Firozpur Cantt.", "Gobindgarh", "Gurdaspur", "Hoshiarpur", "Jagraon", "Jalandhar Cantt.", "Jalandhar", "Kapurthala", "Khanna", "Kharar", "Kot Kapura", "Longowal", "Ludhiana", "Malerkotla", "Malout", "Mansa", "Moga", "Mohali", "Morinda, India", "Mukerian", "Muktsar", "Nabha", "Nakodar", "Nangal", "Nawanshahr", "Pathankot", "Patiala", "Pattran", "Patti", "Phagwara", "Phillaur", "Qadian", "Raikot", "Rajpura", "Rampura Phul", "Rupnagar", "Samana", "Sangrur", "Sirhind Fatehgarh Sahib", "Sujanpur", "Sunam", "Talwara", "Tarn Taran", "Urmar Tanda", "Zira", "Zirakpur"],

      // ************
      "Rajasthan": ["Ajmer", "Alwar", "Bikaner", "Bharatpur", "Bhilwara", "Jaipur*", "Jodhpur", "Lachhmangarh", "Ladnu", "Lakheri", "Lalsot", "Losal", "Makrana", "Malpura", "Mandalgarh", "Mandawa", "Mangrol", "Merta City", "Mount Abu", "Nadbai", "Nagar", "Nagaur", "Nasirabad", "Nathdwara", "Neem-Ka-Thana", "Nimbahera", "Nohar", "Nokha", "Pali", "Phalodi", "Phulera", "Pilani", "Pilibanga", "Pindwara", "Pipar City", "Prantij", "Pratapgarh", "Raisinghnagar", "Rajakhera", "Rajaldesar", "Rajgarh (Alwar)", "Rajgarh (Churu)", "Rajsamand", "Ramganj Mandi", "Ramngarh", "Ratangarh", "Rawatbhata", "Rawatsar", "Reengus", "Sadri", "Sadulshahar", "Sadulpur", "Sagwara", "Sambhar", "Sanchore", "Sangaria", "Sardarshahar", "Sawai Madhopur", "Shahpura", "Shahpura", "Sheoganj", "Sikar", "Sirohi", "Sojat", "Sri Madhopur", "Sujangarh", "Sumerpur", "Suratgarh", "Taranagar", "Todabhim", "Todaraisingh", "Tonk", "Udaipur", "Udaipurwati", "Vijainagar, Ajmer"],

      // ***************

      "Tamil_Nadu": ["Arakkonam", "Aruppukkottai", "Chennai*", "Coimbatore", "Erode", "Gobichettipalayam", "Kancheepuram", "Karur", "Lalgudi", "Madurai", "Manachanallur", "Nagapattinam", "Nagercoil", "Namagiripettai", "Namakkal", "Nandivaram-Guduvancheri", "Nanjikottai", "Natham", "Nellikuppam", "Neyveli (TS)", "O Valley", "Oddanchatram", "P.N.Patti", "Pacode", "Padmanabhapuram", "Palani", "Palladam", "Pallapatti", "Pallikonda", "Panagudi", "Panruti", "Paramakudi", "Parangipettai", "Pattukkottai", "Perambalur", "Peravurani", "Periyakulam", "Periyasemur", "Pernampattu", "Pollachi", "Polur", "Ponneri", "Pudukkottai", "Pudupattinam", "Puliyankudi", "Punjaipugalur", "Ranipet", "Rajapalayam", "Ramanathapuram", "Rameshwaram", "Rasipuram", "Salem", "Sankarankoil", "Sankari", "Sathyamangalam", "Sattur", "Shenkottai", "Sholavandan", "Sholingur", "Sirkali", "Sivaganga", "Sivagiri", "Sivakasi", "Srivilliputhur", "Surandai", "Suriyampalayam", "Tenkasi", "Thammampatti", "Thanjavur", "Tharamangalam", "Tharangambadi", "Theni Allinagaram", "Thirumangalam", "Thirupuvanam", "Thiruthuraipoondi", "Thiruvallur", "Thiruvarur", "Thuraiyur", "Tindivanam", "Tiruchendur", "Tiruchengode", "Tiruchirappalli", "Tirukalukundram", "Tirukkoyilur", "Tirunelveli", "Tirupathur", "Tirupathur", "Tiruppur", "Tiruttani", "Tiruvannamalai", "Tiruvethipuram", "Tittakudi", "Udhagamandalam", "Udumalaipettai", "Unnamalaikadai", "Usilampatti", "Uthamapalayam", "Uthiramerur", "Vadakkuvalliyur", "Vadalur", "Vadipatti", "Valparai", "Vandavasi", "Vaniyambadi", "Vedaranyam", "Vellakoil", "Vellore", "Vikramasingapuram", "Viluppuram", "Virudhachalam", "Virudhunagar", "Viswanatham"],


      "Telangana": ["Adilabad", "Bellampalle", "Bhadrachalam", "Bhainsa", "Bhongir", "Bodhan", "Farooqnagar", "Gadwal", "Hyderabad", "Jagtial", "Jangaon", "Kagaznagar", "Kamareddy", "Karimnagar", "Khammam", "Koratla", "Kothagudem", "Kyathampalle", "Mahbubnagar", "Mancherial", "Mandamarri", "Manuguru", "Medak", "Miryalaguda", "Nagarkurnool", "Narayanpet", "Nirmal", "Nizamabad", "Palwancha", "Ramagundam", "Sadasivpet", "Sangareddy", "Siddipet", "Sircilla", "Suryapet", "Tandur", "Vikarabad", "Wanaparthy", "Warangal", "Yellandu"],

      "Tripura": ["Agartala", "Belonia", "Dharmanagar", "Kailasahar", "Khowai", "Pratapgarh", "Udaipur"],


      "Uttar_Pradesh": ["Achhnera", "Agra", "Aligarh", "Allahabad", "Amroha", "Azamgarh", "Bahraich", "Chandausi", "Etawah", "Firozabad", "Fatehpur Sikri", "Hapur", "Hardoi *", "Jhansi", "Kalpi", "Kanpur", "Khair", "Laharpur", "Lakhimpur", "Lal Gopalganj Nindaura", "Lalitpur", "Lalganj", "Lar", "Loni", "Lucknow*", "Mathura", "Meerut", "Modinagar", "Moradabad", "Nagina", "Najibabad", "Nakur", "Nanpara", "Naraura", "Naugawan Sadat", "Nautanwa", "Nawabganj", "Nehtaur", "Niwai", "Noida", "Noorpur", "Obra", "Orai", "Padrauna", "Palia Kalan", "Parasi", "Phulpur", "Pihani", "Pilibhit", "Pilkhuwa", "Powayan", "Pukhrayan", "Puranpur", "Purquazi", "Purwa", "Rae Bareli", "Rampur", "Rampur Maniharan", "Rampur Maniharan", "Rasra", "Rath", "Renukoot", "Reoti", "Robertsganj", "Rudauli", "Rudrapur", "Sadabad", "Safipur", "Saharanpur", "Sahaspur", "Sahaswan", "Sahawar", "Sahjanwa", "Saidpur", "Sambhal", "Samdhan", "Samthar", "Sandi", "Sandila", "Sardhana", "Seohara", "Shahabad, Hardoi", "Shahabad, Rampur", "Shahganj", "Shahjahanpur", "Shamli", "Shamsabad, Agra", "Shamsabad, Farrukhabad", "Sherkot", "Shikarpur, Bulandshahr", "Shikohabad", "Shishgarh", "Siana", "Sikanderpur", "Sikandra Rao", "Sikandrabad", "Sirsaganj", "Sirsi", "Sitapur", "Soron", "Suar", "Sultanpur", "Sumerpur", "Tanda", "Thakurdwara", "Thana Bhawan", "Tilhar", "Tirwaganj", "Tulsipur", "Tundla", "Ujhani", "Unnao", "Utraula", "Varanasi", "Vrindavan", "Warhapur", "Zaidpur", "Zamania"],

      // **************
      "Uttarakhand": ["Bageshwar", "Dehradun", "Haldwani-cum-Kathgodam", "Hardwar", "Kashipur", "Manglaur", "Mussoorie", "Nagla", "Nainital", "Pauri", "Pithoragarh", "Ramnagar", "Rishikesh", "Roorkee", "Rudrapur", "Sitarganj", "Srinagar", "Tehri"],
      // ***************
      "West_Bengal": ["Adra", "Alipurduar", "Arambagh", "Asansol", "Baharampur", "Balurghat", "Bankura", "Darjiling", "English Bazar", "Gangarampur", "Habra", "Hugli-Chinsurah", "Jalpaiguri", "Jhargram", "Kalimpong", "Kharagpur", "Kolkata", "Mainaguri", "Malda", "Mathabhanga", "Medinipur", "Memari", "Monoharpur", "Murshidabad", "Nabadwip", "Naihati", "Panchla", "Pandua", "Paschim Punropara", "Purulia", "Raghunathpur", "Raghunathganj", "Raiganj", "Rampurhat", "Ranaghat", "Sainthia", "Santipur", "Siliguri", "Sonamukhi", "Srirampore", "Suri", "Taki", "Tamluk", "Tarakeswar"]
    };
    function makeSubmenu(value) {
      if (value.length == 0)
        document.getElementById('citySelect').innerHTML = '<option></option>';
      else {
        var citiesOptions = '';
        for (cityId in citiesByState[value]) {
          citiesOptions +=
            '<option>' + citiesByState[value][cityId] + '</option>';
        }
        document.getElementById('citySelect').innerHTML = citiesOptions;
      }
    }  
  </script>
  <script>
    // Add the following code if you want the name of the file appear on select
    $('.custom-file-input').on('change', function () {
      var fileName = $(this)
        .val()
        .split('\\')
        .pop();
      $(this)
        .siblings('.custom-file-label')
        .addClass('selected')
        .html(fileName);
    });
  </script>
  <script src="{base_url()}/js/vipanan_add_companies.js?v={jsversion()}"></script>

  <script>
    $(document).ready(function () {
      $('.logOutBtn').on('click', function () {
        var baseUrl = $('.baseUrl').attr('baseUrl');

        $.ajax({
          url: 'index.php?vipanan=true',
          dataType: 'json',
          type: 'post',
          data: {
            'logOut': true
          },
          success: function (response) {
            window.location = baseUrl;
          }
        });
      });
    });
  </script>

  <script src="{base_url()}/libs/parsley/parsley.min.js"></script>
  <script type="text/javascript">
    $(function () {
      $('#demo-form')
        .parsley()
        .on('field:validated', function () {
          var ok = $('.parsley-error').length === 0;
          $('.bs-callout-info').toggleClass('hidden', !ok);
          $('.bs-callout-warning').toggleClass('hidden', ok);
        })
        .on('form:submit', function () {
          return false; // Don't submit form for this demo
        });
      //has uppercase
      window.Parsley.addValidator('uppercase', {
        requirementType: 'number',
        validateString: function (value, requirement) {
          var uppercases = value.match(/[A-Z]/g) || [];
          return uppercases.length >= requirement;
        },
        messages: {
          en: 'Your password must contain at least (%s) uppercase letter.'
        }
      });

      //has lowercase
      window.Parsley.addValidator('lowercase', {
        requirementType: 'number',
        validateString: function (value, requirement) {
          var lowecases = value.match(/[a-z]/g) || [];
          return lowecases.length >= requirement;
        },
        messages: {
          en: 'Your password must contain at least (%s) lowercase letter.'
        }
      });

      //has number
      window.Parsley.addValidator('number', {
        requirementType: 'number',
        validateString: function (value, requirement) {
          var numbers = value.match(/[0-9]/g) || [];
          return numbers.length >= requirement;
        },
        messages: {
          en: 'Your password must contain at least (%s) number.'
        }
      });

      //has special char
      window.Parsley.addValidator('special', {
        requirementType: 'number',
        validateString: function (value, requirement) {
          var specials = value.match(/[^a-zA-Z0-9]/g) || [];
          return specials.length >= requirement;
        },
        messages: {
          en: 'Your password must contain at least (%s) special characters.'
        }
      });
    });
  </script>
</body>

</html>