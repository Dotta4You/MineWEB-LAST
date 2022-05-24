<html>
    <head>
        <meta charset="UTF-8" />
        <title>Bewerben × DeinServer.net</title>
        <link href="style/bootstrap.css" rel="stylesheet" />
        <link href="style/main.css" rel="stylesheet" />
        <link href="style/font-awesome.css" rel="stylesheet" />
        <link href="style/font-awesome.min.css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="Description of website" />
    </head>
    <body>
        <div class="container">
            <div class="row block-bg block-single">
                <div class="col-md-12 block">
                    <h1>Bewerben</h1>
                    <hr/>
                    <p>Hier kannst du dich für DeinServer.net bewerben!</p>
                    <form method="post">
                        <label class="apply-label" for="type">Als was möchtest du dich Bewerben?</label>
                        <select name="type" class="form-control" required>
				            <option value="administrator">Administrator</option>
                            <option value="developer">(Web-)-Entwickler</option>
                            <option value="moderator">Moderator</option>
                            <option value="supporter">Supporter</option>
                            <option value="builder">Builder</option>
							<option value="youtuber">YouTuber [Min. 200 Abos]</option>
			                <option value="manager">Management [ Organisieren  /  Planen ]</option>
                        </select><br />
                        <label class="apply-label" for="name">Wie heißt du?</label>
                        <input type="text" class="form-control" name="name" placeholder="Dein name" required><br />
                        
                        <label class="apply-label" for="alter">Wie alt bist du?</label>
                        <input type="number" class="form-control" name="alter" placeholder="Wie alt bist du?" value="14" min="14" required><br />
                        
                        <label class="apply-label" for="description">Wer bist du?</label>
                        <textarea class="form-control" name="description" placeholder="Wer bin ich?"required></textarea><br />
						
                        
                        <label class="apply-label" for="references">Was sind deine Erfahrungen / Referenzen?</label>
                        <textarea class="form-control" name="references" placeholder="Was habe ich bisher alles gemacht?"required></textarea><br />
                        
						
                        <label class="apply-label" for="references">Schreibe einen kleinen Text über dich...</label>
                        <textarea class="form-control" name="references" placeholder="Schreibe einen Kleinen Text über dich..."required></textarea><br />
						
						<label class="apply-label" for="name">Wie sind deine Online-Zeiten?</label>
                        <input type="text" class="form-control" name="name" placeholder="Deine Online-Zeiten" required><br />
                        
                        <label class="apply-label" for="references">Warum DeinServer.net?</label>
                        <textarea class="form-control" name="references" placeholder="Warum eigentlich DeinServer.net?"required></textarea><br />
                        
                        <label class="apply-label" for="contact">Wie erreichen wir dich? (Skype / Discord / Teamspeak / ...)</label>
                        <input type="text" class="form-control" name="contact" placeholder="Kontaktmöglichkeiten" required><br />
                        
                        <label class="apply-label" for="email">Deine E-Mail Adresse</label>
                        <input type="email" class="form-control" name="email" placeholder="Deine E-Mail" required><br />
                        
						                       <label class="apply-label" for="type">Bist du damit einverstanden, Online-funktionen, die von uns bereitgestellt werden, zu nutzen?</label>
                        <select name="type" class="form-control" required>
				            <option value="ja">Ja</option>
                            <option value="nein">Nein</option>
                            <!-- MEHR? -->
                        </select><br />
						
                        <input type="submit" class="btn btn-primary" value="Bewerben">
                    </form>
                </div>
            </div>
        </div> 
            
    </body>
</html>