# MPD Webinterface

## Webinterface für den Musik Player Deamon //Raspberry Pi

### Vorraussetzungen

- aktive Internet/Netzwerkverbindung

### Installation



1. System aktualisieren `sudo apt update && sudo apt upgrade -y`
2. Pakete installieren `sudo apt install mpd mpc alsa-utils apache2 php git -y`
3. Git clone `git clone https://github.com/Fabian-Siebels/mpd-webinterface.git` 
4. index.html löschen `sudo rm /var/www/html/index.html`
5. index.php einfügen `sudo mv index.php /var/www/html`
6. Playlist mit Stream URLs füllen `sudo nano /var/lib/mpd/playlists/sender.m3u`
7. Playlist laden `mpc load sender` 
8. **Fertig**
