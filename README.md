# MPD Webinterface

## Webinterface für den Musik Player Deamon //Raspberry Pi

### Vorraussetzungen

- min. Raspberry Pi 2 mit Raspian
- aktive Internet/Netzwerkverbindung
- Relais 

### Installation



1. System aktualisieren `sudo apt update && sudo apt upgrade -y`
2. Pakete installieren `sudo apt install mpd mpc alsa-utils apache2 php git -y`
3. Git clone `sudo git clone https://github.com/Fabian-Siebels/mpd-webinterface` 
4. index.html löschen `sudo rm /var/www/html`
5. index.php einfügen `sudo mv index.php /var/www/html`
6. Playlist mit Stream URLs füllen `sudo nano /var/lib/mpd/playlists/sender.m3u`
7. Playlist laden `mpc load sender` 
8. **Fertig**
