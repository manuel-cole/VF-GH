<form action="corporate_save_data.php" method="post">
                                <div class="panel panel-default" id="main-panel">
                                    <div class="panel-heading">FRAUD PREVENTION</div>
                                    <div class="panel-body">
                                        <table class="table table-bordered table-striped table-hover table-responsive">
                                            <thead>
                                            <tr>
                                                <th colspan="10" style="text-align: center; background-color: yellow; color: black">
                                                    Fraud Incidents barred
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr style="text-align: center; background-color: #0ad600; color: black;">
                                                <th width="20px" rowspan="2">
                                                    Month
                                                </th>
                                                <th colspan="4" style="text-align: center;">
                                                    SIMBOX
                                                </th>
                                                <th rowspan="2" style="text-align: center;">
                                                    SIMbox (ACT&PRO) <div style="color: red">Auto Populates</div>
                                                </th>
                                                <th rowspan="2" style="text-align: center;">
                                                    Fixed( PBX)
                                                </th>
                                                <th rowspan="2" style="text-align: center;">
                                                    Roaming
                                                </th>
                                                <th rowspan="2" style="text-align: center;">
                                                    Mobile<div>(Data&Voice)</div>
                                                </th>
                                                <th rowspan="2" style="text-align: center;">
                                                    Prepaid <div>Fraud</div>
                                                </th>
                                            </tr>
                                            <tr style="text-align: center; background-color: #0ad600; color: black;">
                                                <td style="width: 20px">
                                                    NCA/Afriwave
                                                </td>
                                                <td>
                                                    SIGos-main
                                                </td>
                                                <td>
                                                    Fraudbuster
                                                </td>
                                                <td style="width: 10px">
                                                    Internal
                                                </td>


                                            </tr>
                                            <tr>
                                                <td>
                                                    APR
                                                </td>
                                                <td>
                                                    <input type="number" name="aprNCA" placeholder="<?php echo $aprNCA;?>" value="<?php echo $aprNCA;?>" style="width: 80px; text-align: center">
                                                </td>
                                                <td>
                                                    <input type="number" name="aprSIG" placeholder="" value="<?php echo $aprSIG;?>" style="width: 80px; text-align: center">
                                                </td>
                                                <td>
                                                    <input type="number" name="aprFraudbuster" placeholder="" value="<?php echo $aprFraudbuster;?>" style="width: 80px; text-align: center">
                                                </td>
                                                <td>
                                                    <input type="number" name="aprInternal" placeholder="" value="<?php echo $aprInternal;?>" style="width: 80px; text-align: center">
                                                </td>
                                                <td style="background-color: #79aca9; text-align: center; font-weight: bolder">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                    <?php echo $aprSimbox;?>
                                                </td>
                                                <td>
                                                    <input type="number" name="aprFixed" placeholder="" value="<?php echo $aprFixed;?>" style="width: 80px; text-align: center">
                                                </td>
                                                <td style="background-color: #a5e6e3">
                                                    <input type="number" name="aprRoaming" placeholder=" " value="<?php echo $aprRoaming;?>" style="width: 80px; text-align: center">
                                                </td>
                                                <td>
                                                    <input type="number" name="aprMobile" placeholder=" " value="<?php echo $aprMobile;?>" style="width: 80px; text-align: center">
                                                </td>
                                                <td style="background-color: #a5e6e3">
                                                    <input type="number" name="aprPrepaid" placeholder=" " value="<?php echo $aprPrepaid;?>" style="width: 80px; text-align: center">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> MAY</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                            </tr>
                                            <tr>
                                                <td>JUN</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                            </tr>
                                            <tr>
                                                <td>JUL</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                            </tr>
                                            <tr>
                                                <td>AUG</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                            </tr>
                                            <tr>
                                                <td>SEPT</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                            </tr>
                                            <tr>
                                                <td>OCT</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                            </tr>
                                            <tr>
                                                <td>NOV</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                            </tr>
                                            <tr>
                                                <td>DEC</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                            </tr>
                                            <tr>
                                                <td>JAN</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                            </tr>
                                            <tr>
                                                <td>FEB</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                            </tr>
                                            <tr>
                                                <td>MAR</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                                <td style="background-color: #a5e6e3"><input type="number" name="aprNca" placeholder=" " style="width: 80px; text-align: center"></td>
                                            </tr>
                                            <tr style="background-color: orange; color: red; font-weight: bold">
                                                <td>TOTAL</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="panel-footer">
                                        <center><button name="cmdFraudPrevention-incidents" type="submit" class="btn btn-danger" value="Save"><span class="fa fa-fw fa-save"></span>Save</button></center>
                                    </div>
                                </div>
                                </form>

