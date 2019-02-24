<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="Description" content="<?php echo $description; ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1" />            
        
            
                <link rel="shortcut icon" href="favicon.ico">
<link rel="alternate" type="application/rss+xml" href="rss.xml" title="<?php echo $site_name; ?>"/>

    <title><?php echo $page_title; ?></title>
    <style type="text/css">

header {

           
            
            
            padding: 1em;
            line-height: 1.2

}

a {
color: #000;
font-weight: bold;
}
        body {
            margin: 40px auto;
            max-width: 700px;
            line-height: 1.6;
            font-size: 18px;
            font-family: sans-serif;
            padding: 0 10px;

        }
        h1 {

            text-align: center;
            padding: 1em;
            line-height: 1.2
        }

        h2 {
            color: #fff;
            background-color: #000;
            text-align: center;
            padding: .5em;
            line-height: 1.2
        }

        h3 {
            color: #000;
            background-color: #fff;
            text-align: center;
            padding: .05em;
            line-height: 1.2
        }

        article {
            padding: 1em;
            border-style: solid;
        }
    </style>
</head>
<body>
<?php echo $body_content; ?><br><?php echo date('r', $post_time); ?>
</body>
</html>
