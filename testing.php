<?php
//setting timezone to local to ensure correct time comparisons are being used
date_default_timezone_set('America/Vancouver');

//testing

// below are testing variables to ensure that open/close comparisons are working correctly. I have set test times for each half hour for every day of the week. The "What should be open:" column lists what places should be open (abbrev's listed below) and the "P" column is for Pass which will allow me to track each as I work my way through. I'll be commenting out all but the specific variables I will be testing, then cycle through. I know that are better testing methods, but time comparisions are such volatile things, I felt a manual test would best accomplish my needs.

//This will also be handy for testing a future plan of having "soon closing" listed for anything closing within 30min

// Committing this branch to show my thought process.

// location abbrev's

// A = Arts Place
// B = BiblioCafe
// CD = Cadboro Commons
// CC =Court Cafe
// H = Halftime
// M = Macs
// MM = Mystic Market
// N = Nibbles and Bytes
// S = Scicafe
// CP = Caps Cafe
// VM = Village Market/Smoothie Bar
// VG = Village Greens

// $today = "Monday";                                    //WHAT SHOULD BE OPEN:

  // $current_time = date("H:i A", strtotime("04:00"));   //everything closed                        P
  // $current_time = date("H:i A", strtotime("07:00"));   //everything closed                        P
  // $current_time = date("H:i A", strtotime("07:30"));   //  CD                                     P
  // $current_time = date("H:i A", strtotime("08:00"));   //  A B CD CC  M MM  N S                   P
  // $current_time = date("H:i A", strtotime("08:30"));   //  A B CD CC  M MM  N S                   P
  // $current_time = date("H:i A", strtotime("09:00"));   //  A B CD  CC  H M MM  N S                P
  // $current_time = date("H:i A", strtotime("09:30"));   //  A B CD  CC  H M MM  N S                P
  // $current_time = date("H:i A", strtotime("10:00"));  //  A B CD  CC  H M MM  N S                P
  // $current_time = date("H:i A", strtotime("10:30"));  //  A B CD  CC  H M MM  N S                P
  // $current_time = date("H:i A", strtotime("11:00"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("11:30"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("12:00"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("12:30"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("13:00"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("13:30"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("14:00"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("14:30"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("15:00"));  //  A B CD  CC  H M MM  N S CP  VM         P
  // $current_time = date("H:i A", strtotime("15:30"));  //  B CD  H M MM  CP  VM                   P
  // $current_time = date("H:i A", strtotime("16:00"));  //  B CD  H M MM  CP  VM                   P
  // $current_time = date("H:i A", strtotime("16:30"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("17:00"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("17:30"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("18:00"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("18:30"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("19:00"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("19:30"));  //  B CD  CP  VM  VG                       P
  // $current_time = date("H:i A", strtotime("20:00"));  //  B CP  VM                               P
  // $current_time = date("H:i A", strtotime("20:30"));  //  B CP  VM                               P
  // $current_time = date("H:i A", strtotime("21:00"));  //  B CP  VM                               P
  // $current_time = date("H:i A", strtotime("21:30"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("22:00"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("22:30"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("23:00"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("23:30"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("24:00"));  //  everything closed                      P
//
// $today = "Tuesday";                                      //WHAT SHOULD BE OPEN:

  // $current_time = date("H:i A", strtotime("04:00"));   //everything closed                        P
  // $current_time = date("H:i A", strtotime("07:00"));   //everything closed                        P
  // $current_time = date("H:i A", strtotime("07:30"));   //  CD                                     P
  // $current_time = date("H:i A", strtotime("08:00"));   //  A B CD CC  M MM  N S                   P
  // $current_time = date("H:i A", strtotime("08:30"));   //  A B CD CC  M MM  N S                   P
  // $current_time = date("H:i A", strtotime("09:00"));   //  A B CD  CC  H M MM  N S                P
  // $current_time = date("H:i A", strtotime("09:30"));   //  A B CD  CC  H M MM  N S                P
  // $current_time = date("H:i A", strtotime("10:00"));  //  A B CD  CC  H M MM  N S                P
  // $current_time = date("H:i A", strtotime("10:30"));  //  A B CD  CC  H M MM  N S                P
  // $current_time = date("H:i A", strtotime("11:00"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("11:30"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("12:00"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("12:30"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("13:00"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("13:30"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("14:00"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("14:30"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("15:00"));  //  A B CD  CC  H M MM  N S CP  VM         P
  // $current_time = date("H:i A", strtotime("15:30"));  //  B CD  H M MM  CP  VM                   P
  // $current_time = date("H:i A", strtotime("16:00"));  //  B CD  H M MM  CP  VM                   P
  // $current_time = date("H:i A", strtotime("16:30"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("17:00"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("17:30"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("18:00"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("18:30"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("19:00"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("19:30"));  //  B CD  CP  VM  VG                       P
  // $current_time = date("H:i A", strtotime("20:00"));  //  B CP  VM                               P
  // $current_time = date("H:i A", strtotime("20:30"));  //  B CP  VM                               P
  // $current_time = date("H:i A", strtotime("21:00"));  //  B CP  VM                               P
  // $current_time = date("H:i A", strtotime("21:30"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("22:00"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("22:30"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("23:00"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("23:30"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("24:00"));  //  everything closed                      P
//
// $today = "Wednesday";                                 //WHAT SHOULD BE OPEN:

  // $current_time = date("H:i A", strtotime("04:00"));   //everything closed                        P
  // $current_time = date("H:i A", strtotime("07:00"));   //everything closed                        P
  // $current_time = date("H:i A", strtotime("07:30"));   //  CD                                     P
  // $current_time = date("H:i A", strtotime("08:00"));   //  A B CD CC  M MM  N S                   P
  // $current_time = date("H:i A", strtotime("08:30"));   //  A B CD CC  M MM  N S                   P
  // $current_time = date("H:i A", strtotime("09:00"));   //  A B CD  CC  H M MM  N S                P
  // $current_time = date("H:i A", strtotime("09:30"));   //  A B CD  CC  H M MM  N S                P
  // $current_time = date("H:i A", strtotime("10:00"));  //  A B CD  CC  H M MM  N S                P
  // $current_time = date("H:i A", strtotime("10:30"));  //  A B CD  CC  H M MM  N S                P
  // $current_time = date("H:i A", strtotime("11:00"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("11:30"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("12:00"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("12:30"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("13:00"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("13:30"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("14:00"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("14:30"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("15:00"));  //  A B CD  CC  H M MM  N S CP  VM         P
  // $current_time = date("H:i A", strtotime("15:30"));  //  B CD  H M MM  CP  VM                   P
  // $current_time = date("H:i A", strtotime("16:00"));  //  B CD  H M MM  CP  VM                   P
  // $current_time = date("H:i A", strtotime("16:30"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("17:00"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("17:30"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("18:00"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("18:30"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("19:00"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("19:30"));  //  B CD  CP  VM  VG                       P
  // $current_time = date("H:i A", strtotime("20:00"));  //  B CP  VM                               P
  // $current_time = date("H:i A", strtotime("20:30"));  //  B CP  VM                               P
  // $current_time = date("H:i A", strtotime("21:00"));  //  B CP  VM                               P
  // $current_time = date("H:i A", strtotime("21:30"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("22:00"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("22:30"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("23:00"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("23:30"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("24:00"));  //  everything closed                      P
//
// $today = "Thursday";                                  //WHAT SHOULD BE OPEN:

  // $current_time = date("H:i A", strtotime("04:00"));   //everything closed                        P
  // $current_time = date("H:i A", strtotime("07:00"));   //everything closed                        P
  // $current_time = date("H:i A", strtotime("07:30"));   //  CD                                     P
  // $current_time = date("H:i A", strtotime("08:00"));   //  A B CD CC  M MM  N S                   P
  // $current_time = date("H:i A", strtotime("08:30"));   //  A B CD CC  M MM  N S                   P
  // $current_time = date("H:i A", strtotime("09:00"));   //  A B CD  CC  H M MM  N S                P
  // $current_time = date("H:i A", strtotime("09:30"));   //  A B CD  CC  H M MM  N S                P
  // $current_time = date("H:i A", strtotime("10:00"));  //  A B CD  CC  H M MM  N S                P
  // $current_time = date("H:i A", strtotime("10:30"));  //  A B CD  CC  H M MM  N S                P
  // $current_time = date("H:i A", strtotime("11:00"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("11:30"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("12:00"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("12:30"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("13:00"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("13:30"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("14:00"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("14:30"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("15:00"));  //  A B CD  CC  H M MM  N S CP  VM         P
  // $current_time = date("H:i A", strtotime("15:30"));  //  B CD  H M MM  CP  VM                   P
  // $current_time = date("H:i A", strtotime("16:00"));  //  B CD  H M MM  CP  VM                   P
  // $current_time = date("H:i A", strtotime("16:30"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("17:00"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("17:30"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("18:00"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("18:30"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("19:00"));  //  B CD  MM  CP  VM  VG                   P
  // $current_time = date("H:i A", strtotime("19:30"));  //  B CD  CP  VM  VG                       P
  // $current_time = date("H:i A", strtotime("20:00"));  //  B CP  VM                               P
  // $current_time = date("H:i A", strtotime("20:30"));  //  B CP  VM                               P
  // $current_time = date("H:i A", strtotime("21:00"));  //  B CP  VM                               P
  // $current_time = date("H:i A", strtotime("21:30"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("22:00"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("22:30"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("23:00"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("23:30"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("24:00"));  //  everything closed                      P
//
// $today = "Friday";                                    //WHAT SHOULD BE OPEN:

  // $current_time = date("H:i A", strtotime("04:00"));   //  everything closed                      P
  // $current_time = date("H:i A", strtotime("07:00"));   //  everything closed                      P
  // $current_time = date("H:i A", strtotime("07:30"));   //  CD                                     P
  // $current_time = date("H:i A", strtotime("08:00"));   //  A B CD  CC  M MM  N S                  P
  // $current_time = date("H:i A", strtotime("08:30"));   //  A B CD  CC  M MM  N S                  P
  // $current_time = date("H:i A", strtotime("09:00"));   //  A B CD  CC  H M MM  N S                P
  // $current_time = date("H:i A", strtotime("09:30"));   //  A B CD  CC  H M MM  N S                P
  // $current_time = date("H:i A", strtotime("10:00"));  //  A B CD  CC  H M MM  N S                P
  // $current_time = date("H:i A", strtotime("10:30"));  //  A B CD  CC  H M MM  N S                P
  // $current_time = date("H:i A", strtotime("11:00"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("11:30"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("12:00"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("12:30"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("13:00"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("13:30"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("14:00"));  //  A B CD  CC  H M MM  N S CP  VM  VG     P
  // $current_time = date("H:i A", strtotime("14:30"));  //  B CD  CC  H M MM  N S CP  VM  VG       P
  // $current_time = date("H:i A", strtotime("15:00"));  //  B CD  CC  H M MM  N S CP  VM           P
  // $current_time = date("H:i A", strtotime("15:30"));  //  B CD  H CP  VM                         P
  // $current_time = date("H:i A", strtotime("16:00"));  //  B CD  H CP  VM                         P
  // $current_time = date("H:i A", strtotime("16:30"));  // CD CP  VM                               P
  // $current_time = date("H:i A", strtotime("17:00"));  // CD CP  VM                               P
  // $current_time = date("H:i A", strtotime("17:30"));  // CD CP  VM                               P
  // $current_time = date("H:i A", strtotime("18:00"));  // CD CP  VM                               P
  // $current_time = date("H:i A", strtotime("18:30"));  // CD CP  VM                               P
  // $current_time = date("H:i A", strtotime("19:00"));  // CD CP  VM                               P
  // $current_time = date("H:i A", strtotime("19:30"));  // CD CP  VM                               P
  // $current_time = date("H:i A", strtotime("20:00"));  // CP  VM                                  P
  // $current_time = date("H:i A", strtotime("20:30"));  // CP  VM                                  P
  // $current_time = date("H:i A", strtotime("21:00"));  // CP  VM                                  P
  // $current_time = date("H:i A", strtotime("21:30"));  // CP  VM                                  P
  // $current_time = date("H:i A", strtotime("22:00"));  // CP  VM                                  P
  // $current_time = date("H:i A", strtotime("22:30"));  // CP  VM                                  P
  // $current_time = date("H:i A", strtotime("23:00"));  // CP  VM                                  P
  // $current_time = date("H:i A", strtotime("23:30"));  // CP  VM                                  P
  // $current_time = date("H:i A", strtotime("24:00"));  //  everything closed                      P
//
// $today = "Saturday";                                  //WHAT SHOULD BE OPEN:

  // $current_time = date("H:i A", strtotime("04:00"));   //  everything closed                      P
  // $current_time = date("H:i A", strtotime("07:00"));   //  everything closed                      P
  // $current_time = date("H:i A", strtotime("07:30"));   //  CD                                     P
  // $current_time = date("H:i A", strtotime("08:00"));   //  CD                                     P
  // $current_time = date("H:i A", strtotime("08:30"));   //  CD                                     P
  // $current_time = date("H:i A", strtotime("09:00"));   //  CD  MM                                 P
  // $current_time = date("H:i A", strtotime("09:30"));   //  CD  MM                                 P
  // $current_time = date("H:i A", strtotime("10:00"));  //  B CD  MM                               P
  // $current_time = date("H:i A", strtotime("10:30"));  //  B CD  MM                               P
  // $current_time = date("H:i A", strtotime("11:00"));  //  B CD  MM                               P
  // $current_time = date("H:i A", strtotime("11:30"));  //  B CD  MM  CP  VM                       P
  // $current_time = date("H:i A", strtotime("12:00"));  //  B CD  MM  CP  VM                       P
  // $current_time = date("H:i A", strtotime("12:30"));  //  B CD  MM  CP  VM                       P
  // $current_time = date("H:i A", strtotime("13:00"));  //  B CD  MM  CP  VM                       P
  // $current_time = date("H:i A", strtotime("13:30"));  //  B CD  MM  CP  VM                       P
  // $current_time = date("H:i A", strtotime("14:00"));  //  B CD  MM  CP  VM                       P
  // $current_time = date("H:i A", strtotime("14:30"));  //  B CD  MM  CP  VM                       P
  // $current_time = date("H:i A", strtotime("15:00"));  //  B CD  MM  CP  VM                       P
  // $current_time = date("H:i A", strtotime("15:30"));  //  B CD  CP  VM                           P
  // $current_time = date("H:i A", strtotime("16:00"));  //  B CD  CP  VM                           P
  // $current_time = date("H:i A", strtotime("16:30"));  //  CD  CP  VM                             P
  // $current_time = date("H:i A", strtotime("17:00"));  //  CD  CP  VM                             P
  // $current_time = date("H:i A", strtotime("17:30"));  //  CD  CP  VM                             P
  // $current_time = date("H:i A", strtotime("18:00"));  //  CD  CP  VM                             P
  // $current_time = date("H:i A", strtotime("18:30"));  //  CD  CP  VM                             P
  // $current_time = date("H:i A", strtotime("19:00"));  //  CD  CP  VM                             P
  // $current_time = date("H:i A", strtotime("19:30"));  //  CD  CP  VM                             P
  // $current_time = date("H:i A", strtotime("20:00"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("20:30"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("21:00"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("21:30"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("22:00"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("22:30"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("23:00"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("23:30"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("24:00"));  //  everything closed                      P
//
// $today = "Sunday";                                    //WHAT SHOULD BE OPEN:

  // $current_time = date("H:i A", strtotime("04:00"));   //  everything closed                      P
  // $current_time = date("H:i A", strtotime("07:00"));   //  everything closed                      P
  // $current_time = date("H:i A", strtotime("07:30"));   //  CD                                     P
  // $current_time = date("H:i A", strtotime("08:00"));   //  CD                                     P
  // $current_time = date("H:i A", strtotime("08:30"));   //  CD                                     P
  // $current_time = date("H:i A", strtotime("09:00"));   //  CD  MM                                 P
  // $current_time = date("H:i A", strtotime("09:30"));   //  CD  MM                                 P
  // $current_time = date("H:i A", strtotime("10:00"));  //  B  CD MM                               P
  // $current_time = date("H:i A", strtotime("10:30"));  //  B  CD MM                               P
  // $current_time = date("H:i A", strtotime("11:00"));  //  B  CD MM                               P
  // $current_time = date("H:i A", strtotime("11:30"));  //  B  CD MM  CP  VM                       P
  // $current_time = date("H:i A", strtotime("12:00"));  //  B  CD MM  CP  VM                       P
  // $current_time = date("H:i A", strtotime("12:30"));  //  B  CD MM  CP  VM                       P
  // $current_time = date("H:i A", strtotime("13:00"));  //  B  CD MM  CP  VM                       P
  // $current_time = date("H:i A", strtotime("13:30"));  //  B  CD MM  CP  VM                       P
  // $current_time = date("H:i A", strtotime("14:00"));  //  B  CD MM  CP  VM                       P
  // $current_time = date("H:i A", strtotime("14:30"));  //  B  CD MM  CP  VM                       P
  // $current_time = date("H:i A", strtotime("15:00"));  //  B  CD MM  CP  VM                       P
  // $current_time = date("H:i A", strtotime("15:30"));  //  B  CD  CP  VM                          P
  // $current_time = date("H:i A", strtotime("16:00"));  //  B  CD  CP  VM                          P
  // $current_time = date("H:i A", strtotime("16:30"));  //  B  CD  CP  VM  VG                      P
  // $current_time = date("H:i A", strtotime("17:00"));  //  B  CD  CP  VM  VG                      P
  // $current_time = date("H:i A", strtotime("17:30"));  //  B  CD  CP  VM  VG                      P
  // $current_time = date("H:i A", strtotime("18:00"));  //  B  CD  CP  VM  VG                      P
  // $current_time = date("H:i A", strtotime("18:30"));  //  B  CD  CP  VM  VG                      P
  // $current_time = date("H:i A", strtotime("19:00"));  //  B  CD  CP  VM  VG                      P
  // $current_time = date("H:i A", strtotime("19:30"));  //  B  CD  CP  VM  VG                      P
  // $current_time = date("H:i A", strtotime("20:00")); //  B  CP  VM                              P
  // $current_time = date("H:i A", strtotime("20:30"));  //  B  CP  VM                              P
  // $current_time = date("H:i A", strtotime("21:00"));  //  B  CP  VM                              P
  // $current_time = date("H:i A", strtotime("21:30"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("22:00"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("22:30"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("23:00"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("23:30"));  //  CP  VM                                 P
  // $current_time = date("H:i A", strtotime("24:00"));  //  everything closed                      P
//



?>
