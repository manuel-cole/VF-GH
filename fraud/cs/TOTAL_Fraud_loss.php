
<form action="corporate_save_data.php" method="post">
                                    <div class="panel panel-default" id="main-panel">
                                        <div class="panel-body">
                                            <table class="table table-bordered table-striped table-hover table-responsive">
                                                <thead>
                                                <tr>
                                                    <th colspan="6" style="text-align: center; background-color: #bfbfbf; color: black">
                                                        TOTAL Fraud loss <a style="color: darkred; font-size: 22">[This Section Auto Populates]</a>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr style="text-align: center; color: black;">
                                                    <th width="20px">
                                                        Month
                                                    </th>
                                                    <th style="text-align: center;">
                                                        Subscription Fraud
                                                    </th>
                                                    <th style="text-align: center;">
                                                       SIMbox loss
                                                    </th>
                                                    <th style="text-align: center;">
                                                        IRSF(PBX)
                                                    </th>
                                                    <th style="text-align: center;">
                                                       National PRS
                                                    </th>
                                                    <th style="text-align: center;">
                                                        Other
                                                    </th>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        APR
                                                    </td>
                                                    <td style="background-color: #eeeeee">
                                                        <input type="number" name="aprNCA" placeholder="<?php echo $aprNCA;?>" value="<?php echo $aprNCA;?>" style="width: 100%; text-align: center" readonly>
                                                    </td>
                                                    <td>
                                                        <input type="number" name="aprSIG" placeholder="" value="<?php echo $aprSIG;?>" style="width: 100%; text-align: center" readonly>
                                                    </td>
                                                    <td style="background-color: #eeeeee">
                                                        <input type="number" name="aprFraudbuster" placeholder="" value="<?php echo $aprFraudbuster;?>" style="width: 100%; text-align: center" readonly>
                                                    </td>
                                                    <td>
                                                        <input type="number" name="aprInternal" placeholder="" value="<?php echo $aprInternal;?>" style="width: 100%; text-align: center" readonly>
                                                    </td>
                                                    <td style="background-color: #eeeeee; text-align: center; font-weight: bolder">
                                                        <input type="number" name="aprInternal" placeholder="" value="<?php echo $aprInternal;?>" style="width: 100%; text-align: center" readonly>
                                                        <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
<!--                                                        --><?php //echo $aprSimbox;?>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td> MAY</td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee">
                                                        <input type="number" name="aprInternal" placeholder="" value="<?php echo $aprInternal;?>" style="width: 100%; text-align: center" readonly>

                                                        <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>JUN</td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee">
                                                        <input type="number" name="aprInternal" placeholder="" value="<?php echo $aprInternal;?>" style="width: 100%; text-align: center" readonly>
                                                        <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>JUL</td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee">
                                                        <input type="number" name="aprInternal" placeholder="" value="<?php echo $aprInternal;?>" style="width: 100%; text-align: center" readonly>
                                                        <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>AUG</td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee">
                                                        <input type="number" name="aprInternal" placeholder="" value="<?php echo $aprInternal;?>" style="width: 100%; text-align: center" readonly>
                                                        <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>SEPT</td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee">
                                                        <input type="number" name="aprInternal" placeholder="" value="<?php echo $aprInternal;?>" style="width: 100%; text-align: center" readonly>
                                                        <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>OCT</td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee">
                                                        <input type="number" name="aprInternal" placeholder="" value="<?php echo $aprInternal;?>" style="width: 100%; text-align: center" readonly>
                                                        <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>NOV</td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee">
                                                        <input type="number" name="aprInternal" placeholder="" value="<?php echo $aprInternal;?>" style="width: 100%; text-align: center" readonly>
                                                        <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>DEC</td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee">
                                                        <input type="number" name="aprInternal" placeholder="" value="<?php echo $aprInternal;?>" style="width: 100%; text-align: center" readonly>
                                                        <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>JAN</td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee">
                                                        <input type="number" name="aprInternal" placeholder="" value="<?php echo $aprInternal;?>" style="width: 100%; text-align: center" readonly>
                                                        <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>FEB</td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee">
                                                        <input type="number" name="aprInternal" placeholder="" value="<?php echo $aprInternal;?>" style="width: 100%; text-align: center" readonly>
                                                        <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>MAR</td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee"><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center" readonly></td>
                                                    <td style="background-color: #eeeeee">
                                                        <input type="number" name="aprInternal" placeholder="" value="<?php echo $aprInternal;?>" style="width: 100%; text-align: center" readonly>
                                                        <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                    </td>

                                                </tr>
                                                <tr style="background-color: #bfbfbf; color: red; font-weight: bold">
                                                    <td>TOTAL</td>
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