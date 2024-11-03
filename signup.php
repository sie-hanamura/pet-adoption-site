<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Pawfect Pawtrails</title>
    <link rel="stylesheet" href="signin-styles.css">
    <link rel="icon" type="icon/x-icon" href="resources/Pawfect Pawtrails-4.png">
</head>
<body>
    <div class="image-wrapper">
        <a class="paw" href="home.php">
            <img src="resources/Pawfect Pawtrails-transparent.png" alt="Pawfect Pawtrails">
        </a>
    </div>

    <main>
        <div>
            <section class="signup-section">
                <h2>Create Your Account</h2>
                <form action="signup_process.php" method="POST">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    
                    <label for="contact">Contact Number:</label>
                    <input type="tel" id="contact" name="contact" pattern="^(\+63)[0-9]{10}$" maxlength="13" value="+63" required>
                    
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" min="0" required>
                    
                    <label for="bday">Birthday:</label>
                    <input type="date" id="bday" name="bday" required>
                    
                            <label for="terms">I accept the <a href="info/tos.php" target="_blank">Terms of Service</a> & <a href="info/privary-policy.php" target="_blank">Privacy Policy</a></label>
                        </div>
                    </div>
                    <button type="submit" class="btn">Signup</button>
                    
                </form>
                
                <div class="login-option">
                    <p>Already have an account? <a href="login.php">Log In</a></p>
                </div>
            </section>
        </div>
    </main>

    <footer>
        <div class="content">
            <section class="footer-links">
                <ul>
                    <li><a class="link" href="info/privary-policy.php" target="_blank">Privacy Policy</a></li>
                    <li><a class="link" href="info/tos.php" target="_blank">Terms of Service</a></li>
                </ul>
            </section>
        </div>
    </footer>
</body>
</html>
