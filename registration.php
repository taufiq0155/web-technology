<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>

<h1>Registration Form</h1>

<form action="register.php" method="POST">
    <table>
        <tr>
            <td>
                <fieldset>
                    <legend>General Information</legend>
                    <table>
                        <tr>
                            <td><label for="fname">First name:</label></td>
                             <td>:</td>
							<td>
							<?php
							echo $_POST["fname"];
							?>
							</td>
                        </tr>
                        <tr>
                            <td><label for="lname">Last name:</label></td>
                            <td>:</td>
							<td>
							<?php
							echo $_POST["lname"];
							?>
							</td>
                        </tr>
                        <tr>
                            <td><label>Gender:</label></td>
                            <td>:
                                
                            </td>
							<td>
							<?php
							echo $_POST["Gender"];
							?>
							</td>
                        </tr>
                        <tr>
                            <td><label for="fathername">Father's name:</label></td>
                            <td>
							<?php
							echo $_POST["fname"];
							?>
							</td>td>
                        </tr>
                        <tr>
                            <td><label for="mothername">Mother's name:</label></td>
                            <td>
							<?php
							echo $_POST["mname"];
							?>
							</td>
                        </tr>
                        <tr>
                            <td><label for="bloodgroup">Blood Group:</label></td>
                            <td>
                                <select id="bloodgroup" name="bloodgroup">
                                    <option value="AB+">AB+</option>
                                    <option value="B+">B+</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="religion">Religion:</label></td>
                            <td>
                                <select id="religion" name="religion">
                                    <option value="Islam">Islam</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Christian">Christian</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </td>
            <td>
                <fieldset>
                    <legend>Contact Information:</legend>
                    <table>
                        <tr>
                            <td><label for="email">Email:</label></td>
                            <td><input type="text" id="email" name="email"></td>
                        </tr>
                        <tr>
                            <td><label for="phone">Phone/Mobile:</label></td>
                            <td><input type="text" id="phone" name="phone"></td>
                        </tr>
                        <tr>
                            <td><label for="website">Website:</label></td>
                            <td><input type="text" id="website" name="website"></td>
                        </tr>
                        <tr>
                            <td><label for="country">Country:</label></td>
                            <td>
                                <select id="country" name="country">
                                    <option value="Bangladesh">Bangladesh</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="city">City:</label></td>
                            <td>
                                <select id="city" name="city">
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Chittagong">Chittagong</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="address">Address:</label></td>
                            <td><textarea id="address" name="address" rows="4" cols="30"></textarea></td>
                        </tr>
                    </table>
                </fieldset>
            </td>
            <td>
                <fieldset>
                    <legend>Account Information:</legend>
                    <table>
                        <tr>
                            <td><label for="username">Username:</label></td>
                            <td><input type="text" id="username" name="username"></td>
                        </tr>
                        <tr>
                            <td><label for="password">Password:</label></td>
                            <td><input type="password" id="password" name="password"></td>
                        </tr>
                        <tr>
                            <td><label for="confirmpassword">Confirm Password:</label></td>
                            <td><input type="password" id="confirmpassword" name="confirmpassword"></td>
                        </tr>
                    </table>
                </fieldset>
            </td>
        </tr>
    </table>
    <br>
    <input type="submit" value="Register">
</form>

</body>
</html>
