<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Certificate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans|Pinyon+Script|Rochester');

.cursive {
  font-family: 'Open Sans', sans-serif;
}

.sans {
  font-family: 'Open Sans', sans-serif;
}

.bold {
  font-weight: bold;
}

.block {
  display: block;
}

.underline {
  border-bottom: 1px solid #777;
  padding: 5px;
  margin-bottom: 15px;
}

.margin-0 {
  margin: 0;
}

.padding-0 {
  padding: 0;
}

.pm-empty-space {
  height: 40px;
  width: 100%;
}

body {
  padding: 20px 0;
  background: #ccc;
}

.pm-certificate-container {
  position: relative;
  width: 800px;
  height: 600px;
  background-color: #618597;
  padding: 30px;
  color: #333;
  font-family: 'Open Sans', sans-serif;
  box-shadow: 0 0 5px rgba(0, 0, 0, .5);
  /*background: -webkit-repeating-linear-gradient(
    45deg,
    #618597,
    #618597 1px,
    #b2cad6 1px,
    #b2cad6 2px
  );
  background: repeating-linear-gradient(
    90deg,
    #618597,
    #618597 1px,
    #b2cad6 1px,
    #b2cad6 2px
  );*/

  .outer-border {
    width: 794px;
    height: 594px;
    position: absolute;
    left: 50%;
    margin-left: -397px;
    top: 50%;
    margin-top:-297px;
    border: 2px solid #fff;
  }

  .inner-border {
    width: 730px;
    height: 530px;
    position: absolute;
    left: 50%;
    margin-left: -365px;
    top: 50%;
    margin-top:-265px;
    border: 2px solid #fff;
  }

  .pm-certificate-border {
    position: relative;
    width: 720px;
    height: 520px;
    padding: 0;
    border: 1px solid #E1E5F0;
    background-color: rgba(255, 255, 255, 1);
    background-image: none;
    left: 50%;
    margin-left: -360px;
    top: 50%;
    margin-top: -260px;

    .pm-certificate-block {
      width: 650px;
      height: 200px;
      position: relative;
      left: 50%;
      margin-left: -325px;
      top: 70px;
      margin-top: 0;
    }

    .pm-certificate-header {
      margin-bottom: 10px;
    }

    .pm-certificate-title {
      position: relative;
      top: 40px;

      h2 {
        font-size: 34px !important;
      }
    }

    .pm-certificate-body {
      padding: 20px;

      .pm-name-text {
        font-size: 20px;
      }
    }

    .pm-earned {
      margin: 15px 0 20px;
      .pm-earned-text {
        font-size: 20px;
      }
      .pm-credits-text {
        font-size: 15px;
      }
    }

    .pm-course-title {
      .pm-earned-text {
        font-size: 20px;
      }
      .pm-credits-text {
        font-size: 15px;
      }
    }

    .pm-certified {
      font-size: 12px;

      .underline {
        margin-bottom: 5px;
      }
    }

    .pm-certificate-footer {
      width: 650px;
      height: 100px;
      position: relative;
      left: 50%;
      margin-left: -325px;
      bottom: -105px;
    }
  }
}

  </style>


  <body>


   <div class="container">
    <div class="row">
        <div class="col-8 m-auto my-3">
            <div class="container pm-certificate-container">
                <div class="outer-border"></div>
                <div class="inner-border"></div>

                <div class="pm-certificate-border col-xs-12">
                  <div class="row pm-certificate-header">
                    <div class="pm-certificate-title cursive col-xs-12 text-center">
                      <h2>Eduflyz Training Certificate of Completion</h2>
                    </div>
                  </div>

                  <div class="row pm-certificate-body">

                    <div class="pm-certificate-block">
                        <div class="col-xs-12">
                          <div class="row">
                            <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
                            <div class="pm-certificate-name underline margin-0 col-xs-8 text-center">
                              <span class="pm-name-text bold">{{$course_info->course_name}}</span>
                            </div>
                            <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
                          </div>
                        </div>

                        <div class="col-xs-12">
                          <div class="row">
                            <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
                            <div class="pm-earned col-xs-8 text-center">
                              <span class="pm-earned-text padding-0 block cursive">Has Complete With</span>
                              <span class="pm-credits-text block bold sans">A+</span>
                            </div>
                            <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
                            <div class="col-xs-12"></div>
                          </div>
                        </div>

                        <div class="col-xs-12">
                          <div class="row">
                            <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
                            <div class="pm-course-title col-xs-8 text-center">
                              <span class="pm-earned-text block cursive">while completing the training course entitled</span>
                            </div>
                            <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
                          </div>
                        </div>

                        <div class="col-xs-12">
                          <div class="row">
                            <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
                            <div class="pm-course-title underline col-xs-8 text-center">
                              <span class="pm-credits-text block bold sans">BPS PGS Initial PLO for Principals at Cluster Meetings</span>
                            </div>
                            <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
                          </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                      <div class="row">
                        <div class="pm-certificate-footer">
                            <div class="col-xs-4 pm-certified col-xs-4 text-center">
                              <span class="pm-credits-text block sans">Buffalo City School District</span>
                              <span class="pm-empty-space block underline"></span>
                              <span class="bold block">Crystal Benton Instructional Specialist II, Staff Development</span>
                            </div>
                            <div class="col-xs-4">
                              <!-- LEAVE EMPTY -->
                            </div>
                            <div class="col-xs-4 pm-certified col-xs-4 text-center">
                              <span class="pm-credits-text block sans">Date Completed</span>
                              <span class="pm-empty-space block underline"></span>

                            </div>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>
              </div>
        </div>
    </div>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
