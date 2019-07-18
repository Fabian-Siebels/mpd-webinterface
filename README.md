# MPD Webinterface

## Webinterface für den Musik Player Deamon //Raspberry Pi

### Vorraussetzungen

- min. Raspberry Pi 2 mit Raspian
- aktive Internet/Netzwerkverbindung
- Relais 

### Installation



1. System aktualisieren `sudo apt update && sudo apt upgrade -y`
2. Pakete installieren `sudo apt install mpd mpc alsa-utils apache2 php -y`
3. index.html löschen `sudo rm /var/www/html`
4. index.php einfügen `sudo mv index.php /var/www/html`
5. Playlist mit Stream URLs füllen `sudo nano /var/lib/mpd/playlists/sender.m3u`
6. Playlist laden `mpc load sender` 
7. ** Fertig**
