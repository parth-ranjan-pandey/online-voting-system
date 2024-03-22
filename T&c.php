<?php include_once("./header.php") ?>

<head>
    <title>T&C</title>
    <style>
        .accordion-item {
            background-color: black;
            color: whitesmoke;
        }

        .accordion-button {
            background-color: #f4d06f;
            color: black;
        }
    </style>
</head>
<div class="container">
    <div class="row">
        <!-- T&C heading -->
        <div class="col-md-12 col-sm-12">
            <div class="d-flex justify-content-center m-2  text-light">
                <h1 class="display-3"> Terms & Conditions</h1>
            </div>
        </div>
        <!-- user T&C accordian voters -->
        <div class="col-md-12 col-sm-12 text-light">
            <h1 class="m-3 display-4"> For Voters</h1>
            <!-- accordian sstarts -->
            <div class="accordion m-3" id="accordionPanelsStayOpenExample">
                <div class="accordion-item bg-dark text-light">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Eligibility
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            To be eligible to vote, a person typically needs to meet certain criteria such as age, citizenship, and residency. Common requirements include being a citizen of the country or jurisdiction holding the election, being of a certain minimum age (usually 18 years old or older), and being a resident in a particular locality or district.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            Voter Registration:
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            In many countries, voters must register to vote before they can participate in an election. Registration requirements may include proof of identity, residence, and citizenship.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Identification
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            oters may be required to provide valid identification at the polling place to verify their identity. This is to prevent voter fraud.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false" aria-controls="panelsStayOpen-collapsefour">
                            Criminal Record
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            In some jurisdictions, individuals with certain criminal convictions may be disqualified from voting. The rules regarding disenfranchisement vary widely.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefive" aria-expanded="false" aria-controls="panelsStayOpen-collapsefive">
                            Residency
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapsefive" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Voters are typically required to vote in the electoral district or constituency where they reside.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- T&C for voters -->
        <div class="col-md-12 col-sm-12 text-light">
            <h1 class="m-3 display-4"> For Candidates</h1>
            <!-- accordian sstarts -->
            <div class="accordion m-3" id="accordionPanelsStayOpenExample">
                <div class="accordion-item bg-dark text-light">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="true" aria-controls="panelsStayOpen-collapse1">
                            Eligibility
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            Candidates must meet certain eligibility criteria, which may include citizenship, age, and residency requirements. In some cases, candidates may also be barred from running for office if they have certain criminal convictions.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
                            Nomination
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Candidates often need to be nominated by a political party or collect a certain number of signatures from eligible voters to appear on the ballot.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
                            Filing Fees
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Some elections require candidates to pay a filing fee to run for office. This fee may be refundable if the candidate receives a minimum percentage of the vote.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapse4">
                            Ethical Conduct
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Candidates are expected to adhere to ethical standards during their campaigns and may be subject to penalties for unethical or illegal behavior, such as spreading false information about opponents.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse5" aria-expanded="false" aria-controls="panelsStayOpen-collapse5">
                            Election Laws
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapse5" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Candidates must follow election laws and regulations, including rules on campaign advertising, fundraising, and reporting campaign expenses.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once("./footer.php") ?>