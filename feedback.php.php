<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            background-color: antiquewhite;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid rgb(70, 68, 68);
            border-radius: 4px;
            resize: vertical;
        }

        input[type=email],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid rgb(70, 68, 68);
            border-radius: 4px;
            resize: vertical;
        }

        input[type=Country],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid rgb(70, 68, 68);
            border-radius: 4px;
            resize: vertical;

        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: rgb(37, 116, 161);
            color: white;
            padding: 6px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #6f4d4d;
            padding: 20px;
        }

        .col {
            float: left;
            width: 10%;
            margin-top: 4px;
        }

        .col_value {
            float: left;
            width: 50%;
            margin-top: 2px;
        }

    
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>

<body>
    <h2>FEEDBACK</h2>
    <div class="container">
        <form>
            <div class="row">
                <div class="col">
                    <label for="first_name">First Name</label>
                </div>
                <div class="col_value">
                    <input type="text" id="first_name" name="firstname" placeholder="Your name..">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="last_name">Last Name</label>
                </div>
                <div class="col_value">
                    <input type="text" id="last_name" name="lastname" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="email">Mail Id</label>
                </div>
                <div class="col_value">
                    <input type="email" id="email" name="mailid" placeholder="Your mail id..">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="country">Country</label>
                </div>    
                    <div class="col_value">
                        <input type="Country" id="lcountry" name="Countryname" placeholder="Your Country..">
                    </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="feed_back">Feed Back</label>
                </div>
                <div class="col_value">
                    <textarea id="subject" name="subject" placeholder="Write something.."
                        style="height:200px"></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

</body>

</html>