                            <form action="corporate_save_data.php" method="post">
                                <div class="panel panel-default" id="main-panel">
                                    <div class="panel-body">
                                        <table class="table table-bordered table-striped table-hover table-responsive">
                                            <thead>
                                            <tr>
                                                <th colspan="7" style="text-align: center; background-color: yellow; color: black">
                                                    Fraud Loss Averted/Savings
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr style="text-align: center; background-color: #0ad600; color: black;">
                                                <th width="20px">
                                                    Month
                                                </th>
                                                <th style="text-align: center;">
                                                   SIMbox
                                                </th>
                                                <th style="text-align: center;">
                                                    Fixed( PBX)        
                                                </th>
                                                <th  style="text-align: center;">
                                                    Roaming 
                                                </th>
                                                <th style="text-align: center;">
                                                    Mobile(Data&Voice)
                                                </th>
                                                <th style="text-align: center;">
                                                    Prepaid Fraud
                                                </th>
                                                <th style="text-align: center;">
                                                    Others
                                                </th>
                                            </tr>
                                           
                                            <tr>
                                                <td>
                                                    APR
                                                </td>
                                                <td>
                                                    <input type="number" name="aprNCA" placeholder="<?php echo $aprNCA;?>" value="<?php echo $aprNCA;?>" style="width: 100%; text-align: center">
                                                </td>
                                                <td>
                                                    <input type="number" name="aprSIG" placeholder="" value="<?php echo $aprSIG;?>" style="width: 100%; text-align: center">
                                                </td>
                                                <td>
                                                    <input type="number" name="aprFraudbuster" placeholder="" value="<?php echo $aprFraudbuster;?>" style="width: 100%; text-align: center">
                                                </td>
                                                <td>
                                                    <input type="number" name="aprInternal" placeholder="" value="<?php echo $aprInternal;?>" style="width: 100%; text-align: center" readonly>
                                                </td>
                                                <td style="background-color: #79aca9; text-align: center; font-weight: bolder">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                    <?php echo $aprSimbox;?>
                                                </td>
                                                <td>
                                                    <input type="number" name="aprFixed" placeholder="" value="<?php echo $aprFixed;?>" style="width: 100%; text-align: center">
                                                </td>
                                               
                                            </tr>
                                            <tr>
                                                <td> MAY</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                             </tr>
                                            <tr>
                                                <td>JUN</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                             </tr>
                                            <tr>
                                                <td>JUL</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                              </tr>
                                            <tr>
                                                <td>AUG</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                            </tr>
                                            <tr>
                                                <td>SEPT</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                             </tr>
                                            <tr>
                                                <td>OCT</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                            </tr>
                                            <tr>
                                                <td>NOV</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                             </tr>
                                            <tr>
                                                <td>DEC</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                             </tr>
                                            <tr>
                                                <td>JAN</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                            </tr>
                                            <tr>
                                                <td>FEB</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                            </tr>
                                            <tr>
                                                <td>MAR</td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                                <td style="background-color: #79aca9">
                                                    <!-- //echo simbox auto pupolate here  [=SUM(B6:E6)]-->
                                                </td>
                                                <td><input type="number" name="aprNca" placeholder=" " style="width: 100%; text-align: center"></td>
                                            </tr>
                                            <tr style="background-color: orange; color: red; font-weight: bold">
                                                <td>TOTAL</td>
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

