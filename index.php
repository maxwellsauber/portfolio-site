<?php
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$from_email = "max@maxsauber.com";
$subject = "SOMEBODY VISITED MY PORTFOLIO!!!!!!!!!!!!!!!!";

putenv("TZ=US/Eastern");					// set time zone
$today= date("l, F dS, Y - h:i:s A");		//date output

if (getenv(HTTP_CLIENT_IP)){ 
$user_ip = getenv(HTTP_CLIENT_IP); 
} 
else { 
$user_ip = getenv(REMOTE_ADDR); 
$user_ip_location = "http://www.ip2location.com/$user_ip";

}
//email body

$mailbody .=
"SOMEBODY VISITED MY PORTFOLIO!!!!!!!!!!!!! \n 
IP: $user_ip\n
IP Location: <a href='$user_ip_location'>View location</a>\n
Date: $today";

// send email
mail("$from_email", "$subject", "$mailbody", "From: $from_email");  // Send the email to the visitor.
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Max Sauber - Portfolio</title>
  <meta name="discription" content="A showcase of works created by Max Sauber">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="css/styles.css" rel="stylesheet">
</head>

<body>
  <div class="hero">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1>Max Sauber</h1>
          <h2>Front-End Developer / UX Designer</h2>
          <p class="lead">I love converting a design concept into usable code</p>
          <p>My focus is front-end development, but I welcome the opportunity to work with other technologies to create
            a
            great experience</p>
        </div>
        <div class="col-md-4">
          <img
            src="https://media-exp1.licdn.com/dms/image/C4D03AQE1RuXf_FzYAg/profile-displayphoto-shrink_400_400/0?e=1597881600&v=beta&t=XWQuA9CjrCqEySM2nGCXw0-exa5bGrpaMAwk6wHyFUs"
            alt="Max Sauber examining UX secrets">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 hero-links">
          <a href="https://github.com/maxwellsauber" target="_blank">
            <i class="fab fa-github"></i>GitHub
          </a>
          <a href="https://www.linkedin.com/in/maxwell-sauber-49644234/" target="_blank">
            <i class="fab fa-linkedin-in"></i>LinkedIn
          </a>
          <a href="http://portfolio.maxsauber.com/resume/" target="_blank">
            <i class="far fa-file"></i>Resume
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="main-content">
    <div class="main-content-body container">
      <div class="row">
        <div class="col-md-9">
          <h3>OPUS Investment Website</h3>
          <p>A freshly rebranded and responsive website. Developed from a series of Photoshop documents created in
            collaboration with the company's graphic design team.</p>
          <a href="http://opusinvestments.com/opus/index.htm" target="_blank" class="btn btn-outline-secondary"><i
              class="fas fa-external-link-alt"></i>
            View Live
          </a>
        </div>
        <div class="col-md-3">
          <img src="img/opus-thumb.png" class="img-fluid" alt="OPUS Investments website thumbnail" />
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-9">
          <h3>Hanover Insurance - Find An Agent</h3>
          <p>An interactive map to find insurance agents. Integrates SalesForce, Bullseye Location, and Google Maps.</p>
          <a href="https://www.hanover.com/find-an-agent/" target="_blank" class="btn btn-outline-secondary"><i
              class="fas fa-external-link-alt"></i>
            View Live
          </a>
        </div>
        <div class="col-md-3">
          <img src="img/map-thumb.png" class="img-fluid" alt="Hanover Insurance - Find An Agent thumbnail" />
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-9">
          <h3>Small Business Risk Report</h3>
          <p>A responsive website developed to digitize and redistribute a printed publication.</p>
          <a href="https://www.hanover.com/small-business-risk-report/" target="_blank"
            class="btn btn-outline-secondary"><i class="fas fa-external-link-alt"></i>
            View Live
          </a>
        </div>
        <div class="col-md-3">
          <img src="img/risk-thumb.png" class="img-fluid" alt="Hanover Insurance - Small Business Risk Report" />
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-9">
          <h3>Understanding Umbrella Coverage</h3>
          <p>An interactive infographic and calculator developed to educate users about umbrella insurance.
          </p>
          <a href="https://www.hanover.com/personal-insurance-umbrella-calculator.html" target="_blank"
            class="btn btn-outline-secondary"><i class="fas fa-external-link-alt"></i>
            View Live
          </a>
        </div>
        <div class="col-md-3">
          <img src="img/umbrella-thumb.png" class="img-fluid"
            alt="Hanover Insurance - Understanding Umbrella Insurance" />
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-9">
          <h3>Rewards Campaign Dashbord</h3>
          <p>Static prototype of a rewards dashboard. Assets were handed off to the development team to integrate with
            multiple
            systems.</p>
          <a href="http://www.portfolio.maxsauber.com/dash" target="_blank" class="btn btn-outline-secondary"><i
              class="fas fa-external-link-alt"></i>
            View Prototype
          </a>
        </div>
        <div class="col-md-3">
          <img src="img/dash-thumb.png" class="img-fluid" alt="Hanover Insurance - TAP Rewards Dashbord Thumbnail" />
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-9">
          <h3>Nostalgia API</h3>
          <p>An API to help users remember all of their favorite things. Powered by an Node/Express/Sequelize(MySQL)
            back-end, Pug documentation and a retro-themed React front-end.</p>
          <a href="https://github.com/maxwellsauber/api-portfolio-project/tree/react" target="_blank"
            class="btn btn-outline-secondary"><i class="fab fa-github"></i>
            View on GitHub
          </a>
        </div>
        <div class="col-md-3">
          <img src="img/nostalgia-thumb.png" class="img-fluid" alt="Nostalgia API Thumbnail" />
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-9">
          <h3>Open Avenues Costing Instrument</h3>
          <p>A responsive web-based application allowing users to calculate the internal costs of losing an employee.
            Leads are saved and
            accessible via an API, while users are able to save results as PDF.</p>
          <a href="https://github.com/maxwellsauber/industry-project" target="_blank"
            class="btn btn-outline-secondary"><i class="fab fa-github"></i>
            View on GitHub
          </a>
        </div>
        <div class="col-md-3">
          <img src="img/oa-thumb.png" class="img-fluid" alt="Open Avenues Costing Instrument thumbnail" />
        </div>
      </div>

    </div>
  </div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 hero-links text-center"">
          <a href=" https://github.com/maxwellsauber" target="_blank">
          <i class="fab fa-github"></i>GitHub
          </a>
          <a href="https://www.linkedin.com/in/maxwell-sauber-49644234/" target="_blank">
            <i class="fab fa-linkedin-in"></i>LinkedIn
          </a>
          <a href="https://docs.google.com/document/d/14lfZPskbpinsLwgvlcyaIeLoqLUXYDV_W-BM1a54uJQ/edit#"
            target="_blank">
            <i class="far fa-file"></i>Resume
          </a>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://kit.fontawesome.com/211798aa69.js" crossorigin="anonymous"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-19183713-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-19183713-3');
</script>

</body>

</html>