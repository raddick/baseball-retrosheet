<TITLE>Retrosheet Event Files</TITLE>
<link rel="stylesheet" type="text/css" href="https://www.retrosheet.org/menubar/menubar.css">
<script type="text/javascript" src="https://www.retrosheet.org/menubar/menubar.js"></script>
<META http-equiv=Content-Type content="text/html; charset=windows-1252">
<META content="MSHTML 6.00.2900.2722" name=GENERATOR>
</HEAD>

<BODY><A name=Top></A>
<p class="nopad"><img src="https://www.retrosheet.org/menubar/retro-logo.gif" alt="Retrosheet" width="400" height="46"
class="bancenter"></p>
<div class="mbcenter">
  <ul class="nav">
    <li><a href="https://www.retrosheet.org/">Home</a></li>
    <li><a href="#">About &darr;</a>
      <ul>
        <li><a href="https://www.retrosheet.org/site.htm">Overview</a></li>
        <li><a href="https://www.retrosheet.org/faq.htm">FAQ</a></li>
      </ul>
    </li>
    <li><a href="#">Games/People/Parks &darr;</a>
      <ul>
        <li><a href="#">People &rarr;</a>
          <ul>
            <li><a href="https://www.retrosheet.org/boxesetc/index.html#Players">Players</a></li>
            <li><a href="https://www.retrosheet.org/boxesetc/index.html#Managers">Managers</a></li>
            <li><a href="https://www.retrosheet.org/boxesetc/index.html#Coaches">Coaches</a></li>
            <li><a href="https://www.retrosheet.org/boxesetc/index.html#Umpires">Umpires</a></li>
            <li><a href="https://www.retrosheet.org/transactions/index.html">Transactions</a></li>
          </ul>
        </li>
        <li><a href="#">Games &rarr;</a>
          <ul>
            <li><a href="https://www.retrosheet.org/boxesetc/index.html">Regular season</a></li>
            <li><a href="https://www.retrosheet.org/Playoff%20Games.htm">Tiebreaker playoffs</a></li>
            <li><a href="https://www.retrosheet.org/boxesetc/MISC/masterPS.htm">Post-season</a></li>
            <li><a href="https://www.retrosheet.org/boxesetc/MISC/masterAS.htm">All-Star games</a></li>
          </ul>
        </li>
        <li><a href="#">Places &rarr;</a>
          <ul>
            <li><a href="https://www.retrosheet.org/boxesetc/MISC/FRDIR.htm">Franchises</a></li>
            <li><a href="https://www.retrosheet.org/boxesetc/MISC/PKDIR.htm">Ballparks</a></li>
            <li><a href="https://www.retrosheet.org/boxesetc/MISC/PNDIR.htm">Birth and death</a></li>
          </ul>
        </li>
        <li><a href="#">Achievements &rarr;</a>
          <ul>
            <li><a href="https://www.retrosheet.org/boxesetc/MISC/XOH.htm">Awards</a></li>
            <li><a href="https://www.retrosheet.org/boxesetc/index.html#TopPerf">Top performances</a></li>
            <li><a href="https://www.retrosheet.org/outstand.htm">No-hitters &amp; cycles</a></li>
            <li><a href="https://www.retrosheet.org/milestones.htm">Milestones</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Data downloads &darr;</a>
      <ul>
        <li><a href="https://www.retrosheet.org/game.htm">Play-by-play files</a></li>
        <li><a href="https://www.retrosheet.org/gamelogs/index.html">Game logs</a></li>
        <li><a href="https://www.retrosheet.org/schedule/index.html">Schedules</a></li>
      </ul>
    </li>
    <li><a href="#">Features &darr;</a>
      <ul>
        <li><a href="https://www.retrosheet.org/lists.htm">Noteworthy events</a></li>
        <li><a href="https://www.retrosheet.org/specfeat.htm">Special features</a></li>
        <li><a href="https://www.retrosheet.org/Research/Research.htm">Research papers</a></li>
        <li><a href="https://www.retrosheet.org/wanted/index.html">Most wanted</a></li>
      </ul>
    </li>
    <li><a href="#">Organization &darr;</a>
      <ul>
        <li><a href="https://www.retrosheet.org/history.htm">Who we are</a></li>
        <li><a href="https://groups.yahoo.com/group/RetroList">Discussion group</a></li>
        <li><a href="https://www.retrosheet.org/donation.htm">Donations</a></li>
      </ul>
    </li>
    <li><a href="#">Archives &darr;</a>
      <ul>
        <li><a href="https://www.retrosheet.org/news.htm">Newsletters</a></li>
        <li><a href="https://www.retrosheet.org/archives.htm">Site history</a></li>
      </ul>
    </li>
  </ul>
</div>
<br class="clearboth">

<h2>
<center>The Event File</center>
</h2>
<p><font size="+1">The event files contain game descriptions using
the Retrosheet scoring system. This page will describe the scoring
system in sufficient detail to allow working with these full
play-by-play descriptions.</font></p>
<p><font size="+1">The files
containing the play-by-play data follow a naming convention.
Each file has one team's home games and has a name of the form YYYYTTT.EVX where EVX
may be EVA, EVN, or EVF for American, National and Federal League games, respectively.
In this format, YYYY is the four digit year and TTT
is a three character team code. The zip archive downloaded
contains a file named TEAMYYYY that contains the team codes and
team names in the particular season. Each file contains the home games in chronological order for the specified team.</font></p>
<p><font size="+1">Files are ASCII text files consisting of a series
of records. Each record is a single line starting with a type
designator and ending with the DOS new line sequence (newline,
carriage return characters).</font></p>
<p><font size="+1">For each game as many as sixteen different record
types may be used. Each record type has a unique designator, which is
followed by several fields separated by commas. These are discussed
in detail below.
</font></p>
<p><font size="+1">The record type is not considered to be a field
and starts in column 1. Following the record type are the record
fields which are separated from the record type and each other by
commas ' , '.</font></p>
<p><font size="+1">Field data such as names are normally enclosed in
double quotes ' " '. Commas used in quoted fields are not field
separators.</font></p>
<p><font size="+1"><a name="2"></a>Retrosheet player id. All players
are represented by a code that is unique for each player. This 8
character code is constructed from the first four letters of the
player's last name, the first initial of his common name, and a three
digit number. If a player's last name is less than 4 characters long
a dash "-" is used as a placeholder. Numbers starting with 0 are used
for players appearing in games in or after 1983. Players completing
their careers before 1983 are assigned numbers starting with 101.
</font></p>
<blockquote><font size="+1">joner002 is the Retrosheet player id for
Ruppert Jones.</font></blockquote>
<p><font size="+1"><span style="font-weight: bold;"><i>id</i></span> Each game begins with a twelve character
ID record which identifies the date, home team, and number of the
game. For example, ATL198304080 should be read as follows. The first
three characters identify the home team (the Braves). The next four
are the year (1983). The next two are the month (April) using the
standard numeric notation, 04, followed by the day (08). The last
digit indicates if this is a single game (0), first game (1) or
second game (2) if more than one game is played during a day, usually
a double header The <i>id</i> record starts the description of a game
thus ending the description of the preceding game in the
file.</font></p>
<blockquote>
  <pre><font size="+1">id,ATL198304080</font></pre>
</blockquote>
<p><font size="+1"><span style="font-weight: bold;"><i>version</i></span> The version record is next, but is
used only for file management internal to Retrosheet and can be ignored.</font></p>
<blockquote style="font-family: monospace;"><font size="+1">version,1</font></blockquote>
<p><font size="+1"><span style="font-weight: bold;"><i>info</i></span> There are up to 34 info records, each
of which contains a single piece of information, such as the
temperature, attendance, identity of each umpire, etc. The record
format is info,type,data . The complete list of </font><a href="#1"><font
 size="+1">info
record types</font></a><font size="+1"> is given below.</font></p>
<blockquote style="font-family: monospace;"><font size="+1">info,attendance,32737</font></blockquote>
<p><font size="+1"><span style="font-weight: bold;"><i>start </span></i> and <span style="font-weight: bold;"><i>sub</i></span> 
There are 18 (for the pre-DH era) or 20 (with the DH) start records, which
identify the starting lineups for the game. Each start or sub record
has five fields. The sub records are used when a player is replaced
during a game. The roster files that accompany the event files
include throwing and batting handedness information.</font></p>
<p><font size="+1">1. The first field is the </font><a href="#2"><font
 size="+1">Retrosheet
player id</font></a><font size="+1">, which is unique for each
player.</font></p>
<p><font size="+1">2. The second field is the player's name.
</font></p>
<p><font size="+1">3. The next field is either 0 (for visiting team),
or 1 (for home team). In some games, typically due to scheduling conflicts, the home team 
(the team whose stadium the game is played in) bats first (in the top of the innings) and the 
visiting team bats second (in the bottom of the innings). In these games, contrary to "normal" games, 
start records for the home team ("1") precede start records for the visiting team ("0"). Similarly, the 
play codes pertaining to the home team ("1") precede the play codes pertaining to
the visiting team ("0").
 </font></p>
<p><font size="+1">4. The next field is the position in the batting
order, 1 - 9. When a game is played using the DH rule the pitcher is
given the batting order position 0. </font></p>
<p><font size="+1">5. The last field is the fielding position. The
numbers are in the standard notation, with designated hitters being
identified as position 10. On sub records 11 indicates a pinch hitter
and 12 is used for a pinch runner.</font></p><br>
Beginning in 2022, the starting pitcher may also be the DH.  This is the "Ohtani rule" made necessary by
the exceptional two-way performance of Shohei Ohtani. In such a case the pitcher will be listed in two
different 'start' lines, one as DH (position 10) and the other as Pitcher (position 1).<br>
<blockquote><font size="+1">start,richg001,"Gene Richards",0,1,7</font></blockquote>
<p><font size="+1"><span style="font-weight: bold;"><i>play</i></span> The play records contain the events of
the game. Each play record has 6 fields after "play". </font></p>
<p><font size="+1">1. The first field is the inning, an integer
starting at 1.</font></p>
<p><font size="+1">2. The second field is either 0 (for visiting
team) or 1 (for home team). </font></p>
<p><font size="+1">3. The third field is the </font><a href="#2"><font
 size="+1">Retrosheet
player id</font></a><font size="+1"> of the player at the plate.
</font></p>
<p><font size="+1">4. The fourth field is the count on the batter
when this particular event (play) occurred. Most games prior to 1988 do
not have this information, and in such cases, "??" appears in this
field. </font></p>
<p><font size="+1">5. The fifth field is of variable length and
contains all pitches to this batter in this plate appearance and is
</font><a href="#3"><font size="+1">described
below</font></a><font size="+1">. If pitches are unknown, this field
is left empty with nothing in between the commas.</font></p>
<p><font size="+1">6. The sixth field describes the play or event
that occurred. </font></p>
<blockquote style="font-family: monospace;"><font size="+1">play,5,1,ramir001,00,,S8.3-H;1-2</font></blockquote>
<p><font size="+1">A play record ending in a number sign, #,
indicates that there is some uncertainty in the play. Occasionally, a
com record may follow providing additional information. A play record
may also contain exclamation points, "!" indicating an exceptional
play and question marks "?" indicating some uncertainty in the play,
"+" indicating a hard hit ball, and "-" for softly hit balls.
These characters can be safely ignored.</font></p>
<blockquote style="font-family: monospace;"><font size="+1">play,3,1,kearb001,??,,PB.2-3#<br>
com,"Not sure if PB, may have been wild pitch"</font></blockquote>
<p><font size="+1">The event is the most complex of all the fields
and is </font><a href="#5"><font size="+1">described in detail
below</font></a><font size="+1">.</font></p>
<p><font size="+1"><span style="font-weight: bold;"><i>badj </i> "Batter adjustment"</span>. This record is used to mark a plate
appearance in which the batter bats from the side that is not expected. The syntax
is:</font></p>
<font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; badj,batter id,hand</font>
<p><font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; The expectation is defined by the roster file.
There are two general cases in which this is used:<br><br>
&nbsp; &nbsp; &nbsp; &nbsp; 1. Many switch-hitters bat right-handed against
right-handed knuckle ball pitchers even though the default assumption
is that they would be batting left-handed.</font></p>
<font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; therefore as an example:<br><br>
<font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; badj,bonib001,R</font><br><br>
<font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; indicates that switch-hitter Bobby Bonilla was batting
right-handed against a right-handed pitcher.</font></blockquote><br>
<p><font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; 2. Occasionally a player will be listed in a
roster as batting "R" or "L" but will bat the other way.<br><br>
&nbsp; &nbsp; &nbsp; &nbsp; For example, Rick Dempsey batted left-handed 13 times in 1983. These plays are marked as:<br><br>
&nbsp; &nbsp; &nbsp; &nbsp; badj,dempr101,L</font></p>
<p><font size="+1"><span style="font-weight: bold;"><i>padj</i> "Pitcher adjustment"</span>. This record covers the unusual case
in which a pitcher pitches to a batter with the hand opposite the one
listed in the roster file. To date there are only two pitchers in our files who have
done so.  Greg Harris, a right-hander, pitched left-handed to two batters in 1995. Pat
Venditte was routinely ambidextrous and pitched in a total of 61 games for
six different teams from 2015 to 2020. The syntax is parallel to that for the badj
record:</font></p>
<font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; padj,pitcher id,hand</font><br>
<p><font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; The expectation is defined by the roster file and an example is:<br><br>
&nbsp; &nbsp; &nbsp; &nbsp; padj,harrg001,L</font>
<p><font size="+1"><span style="font-weight: bold;"><i>ladj</i> "Lineup adjustment"</span>. This record is used when a team bats out
of order. The syntax is:</font></p>
<font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; ladj,batting team,batting order position</font><br><br>
<font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; therefore as an example:<br><br>
<font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; ladj,0,4</font><br><br>
<font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; indicates that the next batter is the one listed in the 4th spot in the
order for the visiting team although some other player was expected to bat next based on
the current lineup.</font><br><br>
<font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; Retrosheet has discovered quite a few cases of batting out of turn. You can see them
in the Special Lists section: <a href="https://www.retrosheet.org/outturn.htm"><font size="+1">Batting Out of Turn</font></a>.<br><br>
<font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; Note that every batting out of turn situation has
its own character, including whether or not it is detected by the
opposition and whether or not the incorrect batter makes an out or
reaches safely.
<p><font size="+1"><span style="font-weight: bold;"><i>radj</i> "Runner adjustment"</span>. This record is used in games beginning in 2020 in which an extra inning
begins with a runner on 2nd. The syntax is:</font></p>
<font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; radj,runner id,base</font><br><br>
<font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; therefore as an example:<br><br>
<font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; radj,turnj001,2</font><br><br>
<font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; indicates that Justin Turner began the inning at 2nd base. Note that this record
type could include other starting bases in the future.</font><br>
<p><font size="+1"><span style="font-weight: bold;"><i>presadj</i> "Pitcher responsibility adjustment"</span>. This record
was created to account for the varied patterns of charging runs to pitchers in innings with more than one pitcher. Modern
rules are clear about how to assign the responsibility for inherited runners, but there was no formal rule about this
before 1940.  The rule was modified to the present form in 1950.  Prior to 1940, the official scorer had broad discretion
to assign runs in such situations and it is not surprising that there was much variation between scorers.  Retrosheet
tries very hard to have our files match the official record so it occasionally necessary to force the crediting in ways
that would contradict modern rules.
The syntax is:</font></p>
<font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; presadj,pitcher id,base occupied by relevant runner</font><br><br>
<font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; therefore as an example:<br><br>
<font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; presadj,cicoe001,2</font><br><br>
<font size="+1">&nbsp; &nbsp; &nbsp; &nbsp; indicates that relief pitcher Cicotte is responsible for the runner who scores 
from 2nd base on the next play. If there were multiple runners affected, there are separate presadj records for each runner</font><br>
<p><font size="+1"><span style="font-weight: bold;"><i>data</i></span> Data records appear after all play
records from the game. At present, the only data type, that
is defined specifies the number of earned runs allowed by a pitcher.
Each such record contains the pitcher's </font><a href="#2"><font
 size="+1">Retrosheet
player id</font></a><font size="+1"> and the number of earned runs he
allowed. There is a data record for each pitcher that appeared in the
game.</font></p>
<blockquote style="font-family: monospace;"><font size="+1">data,er,showe001,2</font></blockquote>
<p><font size="+1"><span style="font-weight: bold;"><i>com</i></span> The final record type is used primarily
to add explanatory information for a play. Although it may occur
anywhere in a file, it is usually not present until after the start records.
The second field of the com record is quoted.</font></p>
<blockquote style="font-family: monospace;"><font size="+1">com,"ML
debut for Behenna"</font></blockquote>
If the comment begins with a "$", then that comment will appear in the narrative play by play account on the site.<br>
<p><font size="+1">There is a standard record ordering for each game.
An <i>id</i> record starts the description of a particular game. This
is followed by the <i>version</i> and <i>info</i> records. The
<i>start</i> records follow the <i>info</i> records. The game is
described by a series of <i>play</i>, <i>sub</i> and <i>com</i>
records. A <i>sub</i> record is always preceded by a <i>play NP</i>
(see below). <i>data</i> records follow the last <i>play</i> record for
the game. A game description is terminated by an <i>id</i> record
starting another game or the end of the file.</font></p>
<h3><font size="+1"><a name="1"></a>Info record types<br>
</font></h3>
<p><font size="+1">Complete records
are shown. <span style="font-style: italic;">info</span> records are
of two general kinds, game-related and
administrative. The order of these records, which appear after the
game id, may not be in the order shown below. Game-related <span
 style="font-style: italic;">info</span> records
are:</font></p>
<p><font size="+1">The home and visiting teams are specified by their
</font><a href="team_codes.html"><font size="+1">Retrosheet team
codes</font></a><font size="+1">. </font></p>
<blockquote style="font-family: monospace;"><font size="+1">info,visteam,SDN<br>
info,hometeam,ATL</font></blockquote>
<p><font size="+1">The date is given in conventional yyyy/mm/dd
style:</font></p>
<blockquote style="font-family: monospace;"><font size="+1">info,date,1983/04/08</font></blockquote>
<p><font size="+1">The number record indicates if this is a single
game (0), first game (1) or second game (2) if more than one game is
played during a day, usually this is a double header:</font></p>
<blockquote style="font-family: monospace;"><font size="+1">info,number,0</font></blockquote>
<p><font size="+1">The hometeam, date and number records duplicate
the information in the <i>id</i> record.</font></p>
<p><font size="+1">Game starting time is given by the two records
	(0:00 and unknown indicate missing information):</font></p>
<blockquote style="font-family: monospace;"><font size="+1">info,starttime,7:44PM<br>
info,daynight,night</font></blockquote>
<p><font size="+1">Number of innings scheduled for this game.  It is usually 9 of course, but in 2020
doubleheaders had scheduled 7-inning games.</font></p>
<blockquote style="font-family: monospace;"><font size="+1">info,innings,number where number is the scheduled length</font></blockquote>
<p><font size="+1">Beginning in 2020 extra innings begin with a runner on base. This is termed a "tiebraker"</font></p>
<blockquote style="font-family: monospace;"><font size="+1">info,tiebreaker,base where base is the starting position of the runner.</font></blockquote>
<p><font size="+1"></font></p>
<p><font size="+1">Whether a game uses the DH rule or not is indicated in the "usedh" record.</font></p>
<blockquote style="font-family: monospace;"><font size="+1">info,usedh,false</font></blockquote>
<p><font size="+1">The presence or absence of pitch information is
given. For some games, the ball-strike counts of the plays are shown,
but no pitch detail is provided. (pitches, count or none):</font></p>
<blockquote><font size="+1"><span style="font-family: monospace;">info,pitches,pitches</span>
  </font></blockquote>
<p><font size="+1">Each umpire and his position on the field are
indicated individually by his Retrosheet ID. For games where umpires
are stationed in the outfield, </font><font size="+1"><span
 style="font-family: monospace;">umplf</span></font><font size="+1">
and </font><font size="+1"><span style="font-family: monospace;">umprf</span></font><font
 size="+1"> are used. Retrosheet has umpire assignments for all games
in history, except some games in 1979 in which replacement umpires were
used.<br>
</font></p>
<blockquote><font size="+1"><span style="font-family: monospace;">info,umphome,quicj901</span><br
 style="font-family: monospace;">
  <span style="font-family: monospace;">info,ump1b,palld901</span><br
 style="font-family: monospace;">
  <span style="font-family: monospace;">info,ump2b,engeb901</span><br
 style="font-family: monospace;">
  <span style="font-family: monospace;">info,ump3b,rungp901</span></font><font
 size="+1"><br>
  </font></blockquote>
<p><font size="+1">Various field conditions are given:</font></p>
<blockquote><font style="font-family: monospace;" size="+1">info,fieldcond,unknown<br>
info,precip,unknown<br>
info,sky,night<br>
info,temp,69<br>
info,winddir,unknown<br>
info,windspeed,-1</font>
  <p><font size="+1">Values used for fieldcond are: dry, soaked, wet,
unknown;<br>
for precip: drizzle, none, rain, showers, snow, unknown;<br>
for sky: cloudy, dome, night, overcast, sunny, uknown;<br>
for winddir: fromcf, fromlf, fromrf, ltor, rtol, tocf, tolf, torf,
unknown.</font></p>
  <p><font size="+1">Temp(erature) is in degrees Fahrenheit with 0
being the not known value.</font></p>
  <p><font size="+1">An unknown windspeed is indicated by -1.</font></p>
</blockquote>

<!-- Added by Mark Pankin, 3/16/07 -->
<p>
<blockquote><font style="font-family: monospace;" size="+1">
The BGAME.EXE program outputs these fields using numeric codes:<br>
FieldCond: 0 Unknown, 1 Soaked, 2 Wet, 3 Damp, 4 Dry<br>
Precip: 0 Unknown, 1 None, 2 Drizzle, 3 Showers, 4 Rain, 5 Snow<br>
Sky: 0 Unknown, 1 Sunny, 2 Cloudy, 3 Overcast, 4 Night, 5 Dome<br>
WindDir: 0 Unknown, 1 ToLeft, 2 ToCenter, 3 ToRight, 4 LeftToRight, 5 FromLeft, 6 FromCenter, 7 FromRight, 8 RightToLeft<br>
WindSpeed: 0 Unknown, 1 Known, other value is the wind speed
</blockquote>
<!----------------------------------->

<p><font size="+1">The length of the game in minutes and the
attendance (0 used if these are not known) are given:</font></p>
<blockquote style="font-family: monospace;"><font size="+1">info,timeofgame,134<br>
info,attendance,10356</font></blockquote>
<font size="+1">&nbsp; &nbsp; attendance value=0 for 1st game of double-headers also<br>
<p><font size="+1">The game site is provided. The site symbols are
defined in the file </font><a
 href="https://www.retrosheet.org/parkcode.txt"><font size="+1">parkcode.txt:</font></a></p>
<blockquote><font size="+1"><span style="font-family: monospace;">info,site,SFO02</span>
  </font></blockquote>
<p><font size="+1">Pitcher win, loss and save data are given as info
records. The Retrosheet player id is used for identification. If no
save is credited, the player id field is empty.</font></p>
<blockquote style="font-family: monospace;"><font size="+1">info,wp,beher001<br>
info,lp,sotom001<br>
info,save,forst001</font></blockquote>
<p><font size="+1">When it was used as an official statistic, game
winning RBI credit is given:</font></p>
<blockquote><font style="font-family: monospace;" size="+1">info,gwrbi,chamc001</font>
  <p><font size="+1">If this information is unknown or a gwrbi was not
credited, the data field is left empty.</font></p>
</blockquote>
<p><font size="+1">info records that pertain to how the game account
was obtained and processed (administrative data) are:</font></p>
<blockquote style="font-family: monospace;"><font size="+1">info,edittime,2000/03/31
11:00AM<br>
info,howscored,park<br>
info,inputprogvers,"version 7RS(19) of 07/07/92"<br>
info,inputter,"C. Chestnut"<br>
info,inputtime,1995/02/07 9:01PM<br>
info,scorer,"Braves"<br>
info,translator,"C. Chestnut"</font></blockquote>
<p><font size="+1">
<hr></font></p>
<h3><font size="+1"><a name="3"></a>The pitches field of the play record</font></h3>
<p><font size="+1">synopsis: </font><font size="+1"><span
 style="font-family: monospace;">play,inning,home/visitor,player
id,count,pitches,event</span></font></p>
<p><font size="+1">The fifth field, pitches, is a string of variable
length and contains all pitches to this batter in this plate
appearance. Most Retrosheet games do not have pitch data and
consequently this field is blank for such games.</font></p>
<pre><font size="+1">
    +  following pickoff throw by the catcher
    *  indicates the following pitch was blocked by the catcher
    .  marker for play not involving the batter
    1  pickoff throw to first
    2  pickoff throw to second
    3  pickoff throw to third
    &gt;  </font><font
 color="#000000" size="+1">Indicates a runner going on the pitch<br></font><font
 size="+1">
    B  ball
    C  called strike
    F  foul
    H  hit batter
    I  intentional ball
    K  strike (unknown type)
    L  foul bunt
    M  missed bunt attempt
    N  no pitch (on balks and interference calls)
    O  foul tip on bunt
    P  pitchout
    Q  swinging on pitchout
    R  foul ball on pitchout
    S  swinging strike
    T  foul tip
    U  unknown or missed pitch
    V  called ball because pitcher went to his mouth or automatic ball on intentional walk
    X  ball put into play by batter
    Y  ball put into play on pitchout
</font></pre>
<p><font size="+1">
<hr></font></p>
<h3><font size="+1"><a name="5"></a>The event field of the play record</font></h3>
<p><font size="+1">The sixth field, event, describes the play which
occurred. This field is variable in length and has three main
portions which define the Retrosheet scoring system. </font></p>
<p><font size="+1">The first part of an event is a description of the
basic play.</font></p>
<p><font size="+1">The second part is a modifier for the first part
and is separated from it with a forward slash, "/". In fact, there
may be more than one modifier. A typical use of modifiers is to
specify </font><a href="https://www.retrosheet.org/location.htm"><font
 size="+1">hit
locations</font></a><font size="+1">. For example, "D8/78" indicates
a double fielded by the center fielder on a ball hit to left center.
A complete list of modifiers excepting hit locations </font><a
 href="#6"><font size="+1">is
given below</font></a><font size="+1">. When more than one modifier
is used, each is introduced by a "/".</font></p>
<p><font size="+1">The third part describes the advance of any
runners, separated from the earlier parts by a period. A successful
advance is indicated by a dash, "-". An out made while advancing is
indicated by an X. 2-3 indicates a runner has advanced from second to
third on the play. 1X2 indicates the runner was out at second
advancing from first. If a base runner is not listed as advancing he
remains on the base he was on. In some cases lack of advance is
indicated explicitly by an advance starting and ending on the same
base such as 3-3 . When put outs are made on base runners the advance
field indicates fielding data and errors if they occur. See below for
a </font><a href="#4"><font size="+1">complete description for
advances</font></a><font size="+1">. Note that any advances after the
first are separated by semicolons.</font></p>
<p><font size="+1">For example, the event "S9/L9S.2-H;1-3" should be
read as: single fielded by the right fielder, line drive to short
right field. The runner on 2nd scored (advanced to home), and the
runner on first advanced to third.</font></p>
<p><font size="+1">Many event descriptions require information in the
form of numbers. The meaning of a particular number depends on where
it appears in the event. For the descriptions that follow the
following notation will be used:</font></p>
<blockquote><font size="+1">Fielders will be represented by a number in
the range 1 (pitcher) to 9 (right fielder) using a dollar sign, "$".
When two $ symbols are used, $$, this is understood to mean a sequence
of two or more fielders.</font>
  <p><font size="+1">Bases are represented by a percent sign, "%",
representing one of five characters, 1, 2 and 3 for first through
third; B or H for home. B is used when a batter advance must be
explicitly given. Scoring is indicated by an advance that reaches home,
H.</font></p>
</blockquote>
<p><font size="+1">Many examples of plays scored using the Retrosheet
system will be given in this document. For some interesting and
extreme cases check the Retrosheet </font><a
 href="https://www.retrosheet.org/strange.htm"><font size="+1">strange
and unusual plays</font></a><font size="+1"> listing.</font></p>
<p><font size="+1">The example plays have been chosen to illustrate
how events are coded. Some of these events are exceedingly
rare.</font></p>
<p><font size="+1">There is occasionally more than one event for each
plate appearance, such as stolen bases, wild pitches, and balks in
which the same batter remains at the plate. On these occasions the
pitch sequence is interrupted by a period, and there is another play
record for the resumption of the batter's plate
appearance.</font></p>
<p><font size="+1">For purposes of description, it is convenient to
separate the event types into two categories: those involving the
</font><a href="#8"><font size="+1">batter at the
plate</font></a><font size="+1"> and </font><a href="#9"><font
 size="+1">base
running</font></a><font size="+1"> plays that do not involve the
batter.</font></p>
<p>
</p>
<hr>
<h3><a name="8"></a><font size="+1">Events made by the batter at the
plate</font></h3>
<p><font size="+1"><span style="font-weight: bold;">$</span> A single
fielder represents an unassisted out made
by the specified fielder. Modifiers can be added to indicate the batted
ball trajectory: G for ground ball, L for line drive, P for pop up, F
for a fly ball BG for bunt grounder, BP for bunt pop up. The ball
trajectory code may be followed by a hit location code.</font></p>
<blockquote><font size="+1"><span style="font-family: monospace;">play,7,0,saboc001,01,CX,8/F78</span></font><font
 size="+1"><br>
indicates a fly ball caught by the center fielder in left center field.</font></blockquote>
<p><font size="+1">A sacrifice fly is indicated by the modifier SF
following a fly out play. The runner scoring because of the sacrifice
is coded in the advance part of the play.</font></p>
<blockquote style="font-family: monospace;"><font size="+1">play,5,0,grifk001,10,.BX,9/SF.3-H</font></blockquote>
<p><font size="+1">In the case that a fielder makes an unassisted out
on a ground ball a modifier G follows the event.</font></p>
<blockquote><font size="+1"><span style="font-family: monospace;">play,5,0,duncm001,00,X,3/G.2-3</span></font><font
 size="+1"><br>
indicates an unassisted out made by the first baseman with the runner
on second advancing to third.</font></blockquote>
<p><font size="+1"><span style="font-weight: bold;">$$</span> Strings
of two or more fielders as an event
specify a ground out where the put out is credited by the last
fielder in the string. Other fielders are credited with
assists.</font></p>
<blockquote><font size="+1"><span style="font-family: monospace;">play,6,0,davie001,01,FX,63/G6M</span></font><font
 size="+1"><br>
indicates a ground ball out at first on a ball fielded by the shortstop.</font>
  <p><font size="+1"><span style="font-family: monospace;">play,9,1,pendt001,00,X,143/G1</span></font><font
 size="+1"><br>
More than one player can touch the ball before an out is made. In this
case, the pitcher has deflected the ball before the second baseman
threw to first base.</font></p>
  <p><font size="+1"><span style="font-family: monospace;">play,7,1,tempg001,00,X,54(B)/BG25/SH.1-2</span></font><font
 size="+1"><br>
If the putout is made at a base not normally covered by the fielder the
base runner, batter in this example, is given explicitly.</font></p>
</blockquote>
<p><font size="+1">Force outs are indicated by adding the FO modifier
and indicating the base runner forced.</font></p>
<blockquote><font size="+1"><span style="font-family: monospace;">play,5,0,gileb001,10,BX,54(1)/FO/G5.3-H;B-1</span></font><font
 size="+1"><br>
The runner on first is forced at second by a throw from the third
baseman to the second baseman. The runner on third scores and the batter is safe at first.
The explicit advance indicated for the batter is optional. A second
modifier is used to indicate the batted ball trajectory and location.</font></blockquote>
<p><font size="+1">With the addition of a SH modifier this form is
used to indicate sacrifice hits or bunts that advance a
runner.</font></p>
<blockquote style="font-family: monospace;"><font size="+1">play,6,1,camik001,00,X,23/SH.1-2</font></blockquote>
<p><font size="+1"><span style="font-weight: bold;">$(%)$ $$(%)$</span>
Events of this form are used to code
grounded into double plays.</font></p>
<blockquote><font size="+1"><span style="font-family: monospace;">play,7,0,backw001,11,FBX,64(1)3/GDP/G6</span></font><font
 size="+1"><br>
indicates a grounded into double play. The parenthesized 1 indicates
the base runner on first was the initial out on the play. The GDP
modifier is followed by a another / and a hit type and location.</font>
  <p><font size="+1"><span style="font-family: monospace;">play,8,1,smito001,22,BFCBX,4(1)3/G4/GDP</span></font><font
 size="+1"><br>
An unassisted ground ball out by the second baseman starts this double
play.</font></p>
</blockquote>
<p><font size="+1"><span style="font-weight: bold;">$(B)$(%)</span>
followed by the modifier LDP is used to
indicate a lined into double play.</font></p>
<blockquote><font size="+1"><span style="font-family: monospace;">play,7,0,leonj001,01,CX,8(B)84(2)/LDP/L8</span></font><font
 size="+1"><br>
indicates a line drive out to the center fielder with the runner on
second doubled up.</font>
  <p><font size="+1"><span style="font-family: monospace;">play,7,0,fernt001,10,BX,3(B)3(1)/LDP</span></font><font
 size="+1"><br>
indicates an unassisted double play by the first baseman who fielded
the line drive and caught the runner off first base.</font></p>
</blockquote>
<p><font size="+1">The double play notation can be extended in
obvious ways to describe triple plays.</font></p>
<blockquote style="font-family: monospace;"><font size="+1">play,7,1,randw001,00,.&gt;X,1(B)16(2)63(1)/LTP/L1</font></blockquote>
<p><font size="+1"><span style="font-weight: bold;">Note:</span> the
double digit combination 99, which
cannot arise in play, is used to code unknown plays including forms
that otherwise describe force outs and the double plays. Additional
fielders in the double play are assigned 9. No assist or putout
credits are given.<br>
<br>
<span style="font-weight: bold;">C/E2 </span>codes catcher
interference. Implicitly, the batter is awarded first
unless overridden by an advance indicating otherwise. A redundant B-1
is allowed.</font></p>
<blockquote style="font-family: monospace;"><font size="+1">play,9,1,cruzj002,??,,C/E2.1-2</font>
</blockquote>
<p><font color="#000000" size="+1"><span style="font-weight: bold;">C/E1</span>
or <span style="font-weight: bold;">C/E3</span> are used when the
pitcher or first baseman are called for interfering with the batter
putting him on first without being charged with an at bat. In these
cases C is interpreted as interference by the fielder specified
following the E, not the catcher.</font></p>
<p><font size="+1"><span style="font-weight: bold;">S$</span> single<br>
<span style="font-weight: bold;">D$</span> double<br>
<span style="font-weight: bold;">T$</span> triple<br>
A hit (excepting a home run) is indicated by one of S, D and T
optionally followed by the fielder, $, initially handling the ball.
If more than one fielder handles the ball the appropriate sequence of
fielders is given. The fielder designation is omitted if that
information is not known. The batter advance to the designated base
is implicit.</font></p>
<blockquote><font size="+1"><span style="font-family: monospace;">play,8,0,pacit001,??,,S7</span></font><font
 size="+1"><br>
is a minimal coding of a single showing that the left fielder first
handled the ball. The ?? in the count field indicates the count at the
time of the hit is unknown.</font>
  <p><font size="+1"><span style="font-family: monospace;">play,2,1,santn001,12,CFBX,D7/G5.3-H;2-H;1-H</span></font><font
 size="+1"><br>
codes a bases loaded double fielded by the left fielder, a modifier
showing the hit location code and advances for each of the base runners.</font></p>
  <p><font size="+1"><span style="font-family: monospace;">play,3,0,raint001,11,CBX,T9/F9LD.2-H</span></font><font
 size="+1"><br>
describes a triple to right field, a hit location and a runner on
second scoring.</font></p>
</blockquote>
<p><font size="+1"><span style="font-weight: bold;">DGR</span> is the
code for a ground rule double. No
fielding player is specified.</font></p>
<blockquote style="font-family: monospace;"><font size="+1">play,3,0,surhb001,10,.BX,DGR/L9LS.2-H</font></blockquote>
<p><font size="+1"><span style="font-weight: bold;">E$</span> is the
code for an error allowing a batter to
get on base. The fielder making the error is given by $. The batter
advance to first is implicit but may be given explicitly.</font></p>
<blockquote><font size="+1"><span style="font-family: monospace;">play,2,0,ruffb001,10,BX,E1/TH/BG15.1-3</span></font><font
 size="+1"><br>
indicates a throwing error (modifier "/TH") error on the pitcher with
the runner on first advancing to third. The batter advance to first is
implicit.</font>
  <p><font size="+1"><span style="font-family: monospace;">play,5,1,young001,00,X,E3.1-2;B-1</span></font><font
 size="+1"><br>
indicates a fielding error by the first baseman. In this case the
batter advance to first has been explicitly given.</font></p>
</blockquote>
<p><font size="+1"><span style="font-weight: bold;">FC$</span>
Fielder's choice. $ is the fielder first
fielding the ball. The batter advance to first is understood if it is
not given explicitly.</font></p>
<blockquote><font size="+1"><span style="font-family: monospace;">play,4,0,harpb001,22,BBFSFX,FC5/G5.3XH(52)</span></font><font
 size="+1"><br>
The third baseman fielded the ball and threw home in time to retire the
runner attempting to score. The batter was safe at first.</font>
  <p><font size="+1"><span style="font-family: monospace;">play,5,1,jordr001,00,X,FC3/G3S.3-H;1-2</span></font><font
 size="+1"><br>
The first baseman fielded the ball and attempted to throw an
unspecified runner out. No outs were made and the batter is safe at
first.<br>
  </font></p>
  <p><font size="+1">Note that even though force outs are considered
fielder's choices, the notation distinguishes between force outs and
non-forced fielder's choices.<br>
  </font></p>
</blockquote>
<p><font size="+1"><span style="font-weight: bold;">FLE$</span> Error
on foul fly ball.</font></p>
<blockquote style="font-family: monospace;"><font size="+1">play,5,0,murre001,00,F,FLE5/P5F</font></blockquote>
<p><font size="+1"><span style="font-weight: bold;">H</span> or <span
 style="font-weight: bold;">HR</span> is the code for a home run
leaving the
park. The location modifier can be used to indicate where the ball
left the playing field.</font></p>
<blockquote><font size="+1"><span style="font-family: monospace;">play,8,0,bellg001,21,CBBX,H/L7D</span></font><font
 size="+1"><br>
indicates a solo home run to left field.</font>
  <p><font size="+1"><span style="font-family: monospace;">play,12,1,bichd001,02,FFFX,HR/F78XD.2-H;1-H</span></font><font
 size="+1"><br>
shows a home run to center field with the runners on first and second
scoring.</font></p>
</blockquote>
<p><font size="+1"><span style="font-weight: bold;">H$</span> or <span
 style="font-weight: bold;">HR$</span> indicates an inside-the-park
home run by
giving a fielder as part of the code.</font></p>
<blockquote style="font-family: monospace;"><font size="+1">play,4,0,younr001,32,FBFFFBBX,HR9/F9LS.3-H;1-H</font></blockquote>
<p><font size="+1"><span style="font-weight: bold;">HP</span> Batter
hit by a pitch. The batter advance to
first is implicit. Other advances are given if needed.</font></p>
<blockquote style="font-family: monospace;"><font size="+1">play,1,1,lansc001,00,H,HP.1-2</font></blockquote>
<p><font size="+1"><span style="font-weight: bold;">K</span> Strike out</font></p>
<blockquote><font style="font-family: monospace;" size="+1">play,1,1,steit001,12,C2FBS,K</font>
  <p><font size="+1"><span style="font-family: monospace;">play,6,1,wynnm001,22,..BBFCFS,K23</span></font><font
 size="+1"><br>
A dropped third strike with a putout at first base is given by the
event K23.</font></p>
</blockquote>
<p><font size="+1"><span style="font-weight: bold;">K+event</span> On
third strikes various base running play
may also occur. The event can be SB%, CS%, OA, PO%, PB, WP and
E$.</font></p>
<blockquote><font size="+1"><span style="font-family: monospace;">play,2,0,roomr001,12,1BF1S11S,K+PB.1-2</span></font><font
 size="+1"><br>
A passed ball on strike three allowed the runner on first to go to
second.</font>
  <p><font size="+1"><span style="font-family: monospace;">play,5,1,whitd001,02,FLFFS,K+WP.B-1</span></font><font
 size="+1"><br>
An explicit batter advance is given when he reaches first on a third
strike miscue. An </font><a href="#7"><font size="+1">alternative
notation</font></a><font size="+1"> for WP and PB is given below.</font></p>
  <p><font size="+1"><span style="font-family: monospace;">play,8,1,davic001,12,CFB.S,K23+WP.2-3</span></font><font
 size="+1"><br>
Of course, a base running event can occur when the third strike is
dropped.</font></p>
</blockquote>
<p><font size="+1"><span style="font-weight: bold;">NP</span> no play.
This event is used as a marker when
substitutions are made.</font></p>
<blockquote style="font-family: monospace;"><font size="+1">play,8,0,puckk001,00,,NP<br>
sub,kutcr001,"Randy Kutcher",1,5,8</font></blockquote>
<p><font size="+1"><span style="font-weight: bold;">I</span> or <span
 style="font-weight: bold;">IW</span> intentional walk<br>
<span style="font-weight: bold;">W</span> walk. In both cases base
runner advances are given
if needed. The batter advance to first base is implicit.</font></p>
<blockquote><font style="font-family: monospace;" size="+1">play,6,1,ripkc001,32,CFBBFB&gt;B,W.1-2</font>
  <p style="font-family: monospace;"><font size="+1">play,8,0,sciom001,30,B+22.III,IW</font></p>
</blockquote>
<p><font size="+1"><span style="font-weight: bold;">W+event</span>, <span
 style="font-weight: bold;">IW+event</span>. On ball four various base
running plays may also occur. The event can be SB%, CS%, PO%, PB, WP
and E$.</font></p>
<blockquote><font size="+1"><span style="font-family: monospace;">play,1,1,sandr001,32,C1FBB.BFB,W+WP.2-3</span></font><font
 size="+1"><br>
The fourth ball was a wild pitch allowing the runner on second to
advance.</font></blockquote>
<p>
</p>
<hr>
<h3><a name="9"></a><font size="+1">Base-running events not involving
the
batter</font></h3>
<p><font size="+1">The player specified in these plays is the batter
at the plate, not the base runner or runners affected by the
play.</font></p>
<p><font size="+1">The play pitches and count fields (if given) are
for the batter at the time of the event. Unless the event is a inning
or game ending out it will be followed by another event listing the
batter.</font></p>
<p><font size="+1"><span style="font-weight: bold;">BK</span> indicates
a balk. </font></p>
<blockquote style="font-family: monospace;"><font size="+1">play,6,0,niekp001,??,,BK.3-H;1-2</font></blockquote>
<p><font size="+1"><span style="font-weight: bold;">CS%($$)</span> is
the event code for caught stealing. The
bases, %, for this play are 2,3 and H. The fielding data, $$, is
considered part of the play. Other advances may be given.</font></p>
<blockquote><font style="font-family: monospace;" size="+1">play,5,1,ceror001,??,,CSH(12)</font>
  <p style="font-family: monospace;"><font size="+1">play,1,0,bayld001,??,,CS2(24).2-3</font></p>
  <p><font size="+1"><span style="font-family: monospace;">play,6,0,beneb001,??,,CS2(2E4).1-3</span></font><font
 size="+1"><br>
The error negates the out with the advance field indicating a two base
advance on the play.</font></p>
</blockquote>
<p><font size="+1"><span style="font-weight: bold;">DI</span> is the
defensive indifference code and is given
when there is no attempt to prevent a stolen base. The advance field
specifies which base the runner went to.</font></p>
<blockquote style="font-family: monospace;"><font size="+1">play,9,0,bencj101,??,,DI.1-2</font></blockquote>
<p><font size="+1"><span style="font-weight: bold;">OA</span> is coded
for a base runner advance that is not
covered by one of the other codes. A comment may be given explaining
the advance.</font></p>
<blockquote style="font-family: monospace;"><font size="+1">play,3,1,parkr001,??,,OA.2X3(25)<br>
com,"Thompson out trying to advance after ball eluded catcher"</font></blockquote>
<p><font size="+1"><span style="font-weight: bold;">PB</span> passed
ball<br>
<span style="font-weight: bold;">WP</span> wild pitch. In both cases
the catcher is unable to handle a pitch
and a base runner advances. </font></p>
<blockquote><font style="font-family: monospace;" size="+1">play,1,1,jackb001,12,FBSFFB,WP.2-3;1-2</font>
  <p style="font-family: monospace;"><font size="+1">play,1,1,evand002,01,CB,PB.2-3</font></p>
</blockquote>
<p><font size="+1"><span style="font-weight: bold;">PO%($$)</span>
picked off of base % (1, 2 or 3) with the
($$) indicating the throw(s) and fielder making the putout.</font></p>
<blockquote><font size="+1"><span style="font-family: monospace;">play,4,0,guerp001,00,22,PO2(14)</span></font><font
 size="+1"><br>
indicates the runner on second was out by a pick off throw from the
pitcher to second baseman.</font>
  <p><font size="+1"><span style="font-family: monospace;">play,1,1,wallt001,10,B11,PO1(E3).1-2</span></font><font
 size="+1"><br>
shows an attempt at a pick off at first with the first baseman
committing an error that allows the runner to advance to second. The
presence of the error (E3) negates the out normally associated with the
pickoff play.</font></p>
</blockquote>
<p><font size="+1"><span style="font-weight: bold;">POCS%($$)</span>
picked off off base % (2, 3 or H) with
the runner charged with a caught stealing. The ($$) is the sequence
of throws resulting in the out.</font></p>
<blockquote style="font-family: monospace;"><font size="+1">play,6,1,javis001,10,B1,POCS2(1361)</font></blockquote>
<p><font size="+1"><span style="font-weight: bold;">SB%</span> is the
event code for a stolen base. The
bases, %, for this play are 2,3 and H.</font></p>
<blockquote><font style="font-family: monospace;" size="+1">play,6,0,benzt001,11,BSB,SB2</font>
  <p><font size="+1"><span style="font-family: monospace;">play,4,1,waltj001,10,BB,SB3;SB2</span></font><font
 size="+1"><br>
  </font><font size="+1"><span style="font-family: monospace;">play,4,1,shefg001,12,SP1CB,SBH;SB2</span></font><font
 size="+1"><br>
show double steals, second and third in one case, second and home in
the other.</font></p>
</blockquote>
<p><font size="+1">
<hr></font></p>
<h3><font size="+1"><a name="6"></a>Play modifiers and explanations</font></h3>
<p><font size="+1">Each modifier is
preceded by / in a play record. As always, % indicates one the four
bases and $ indicates a fielder.</font></p>
<pre><font size="+1">
AP    appeal play
BP    pop up bunt
BG    ground ball bunt
BGDP  bunt grounded into double play
BINT  batter interference
BL    line drive bunt
BOOT  batting out of turn
BP    bunt pop up
BPDP  bunt popped into double play
BR    runner hit by batted ball
C     called third strike
COUB  courtesy batter
COUF  courtesy fielder
COUR  courtesy runner
DP    unspecified double play
E$    error on $
F     fly
FDP   fly ball double play
FINT  fan interference
FL    foul
FO    force out
G     ground ball
GDP   ground ball double play
GTP   ground ball triple play
IF    infield fly rule
INT   interference
IPHR  inside the park home run
L     line drive
LDP   lined into double play
LTP   lined into triple play
MREV  manager challenge of call on the field
NDP   no double play credited for this play
OBS   obstruction (fielder obstructing a runner)
P     pop fly
PASS  a runner passed another runner and was called out
R$    relay throw from the initial fielder to $ with no out made
RINT  runner interference
SF    sacrifice fly
SH    sacrifice hit (bunt)
TH    throw
TH%   throw to base %
TP    unspecified triple play
UINT  umpire interference
UREV  umpire review of call on the field

<p><font size="+1">
<hr></font></p>
<h3><font size="+1"><a name="3"></a>Event advances.</font></h3>
<p><font size="+1">In addition to base runner movements, the advance
portion of an event indicates fielding, errors and has the indicators
indicating if a run is unearned and if an RBI is or is not
credited.</font>
<p><font size="+1">Bases are represented by one of five characters, 1
for first, 2, 3 and B or H for home. B is used when a batter advance
must be explicitly given. Scoring is indicated by a successful
advance that reaches home, H.</font>
<p><font size="+1">Separate advances are given for each runner on
base and are separated by a semicolon, ";". When more than one runner
advance is given for a play they are ordered starting with the runner
on third base and ending with the batter.</font>
<p><font size="+1">Advances may include additional information in the
form of one or more parameters specified as a parenthesized strings
of characters. When more than one parameter is given on an advance
they are individually parenthesized.</font>
<p><font size="+1">A successful advance is given in the form 1-2. The
dash "-" indicates a successful advance. Multiple base advances are
indicated with the same notation: B-2, 1-3, 1-H, 2-H. </font>
<blockquote><font style="font-family: monospace;" size="+1">play,1,1,marte001,32,BBCBFFB,W.2-3;1-2</font><br>
play,3,1,stilk001,11,CBX,S7/F7S.2-H;B-2
</blockquote>
<p><font size="+1">A runner put out at a particular base is indicated
by the "X": 2X3, 1XH. When a runner is out the advance gives the
fielding information as a parameter specifying fielders. The last
fielder gets credit for the put out and the others get
assists.</font>
<blockquote><font style="font-family: monospace;" size="+1">play,4,1,stubf001,32,CBFBBFFS,K/DP.1X2(26)</font>
  <p style="font-family: monospace;"><font size="+1">play,6,0,murre001,22,BSFFBX,9/F9LS/FDP.3XH(92)</font>
  <p style="font-family: monospace;"><font size="+1">play,4,0,blauj001,01,CX,S8/L78.BX2(8434)</font>
</blockquote>
<p><font size="+1">Fielding errors are indicated by including an E in
the parameter following an advance. The fielder following the E is
charged with the error.</font>
<blockquote><font size="+1"><span style="font-family: monospace;">play,3,0,fielc001,00,X,S7/L7LD.3-H;2-H;BX2(7E4)</span></font><font
 size="+1"><br>
Following a second baseman error the batter is safe at second. The
error indicator negates the out. The left fielder is credited with an
assist.</font>
  <p><font size="+1"><span style="font-family: monospace;">play,7,0,puckk001,01,CX,S5/G5.1-3(E5/TH)</span></font><br>
The parameter in this play attributes a throwing error to the third
baseman. A base indicator may follow TH, TH2 for example.</font>
</blockquote>
<p><font size="+1">Parameters are used to indicate if a run is
unearned (UR) and if RBI is to be credited (RBI) or not (NR),
(NORBI). When these parameters are not present, normal rules are
followed.</font>
<blockquote><font size="+1"><span style="font-family: monospace;">play,9,0,davie001,30,BBBB,W+PB.3-H(NR);1-3</span></font><font
 size="+1"><br>
The run scored on the passed ball is not credited as an RBI to the
batter.</font>
  <p><font size="+1"><span style="font-family:
monospace;">play,8,1,sax-s001,22,BCFBFX,S4/G34.2-H(E4/TH)(UR)(NR);1-3;B-2</span></font><font
 size="+1"><br>
Three parameters are given on the 2-H advance. The first indicates a
second baseman throwing error, the second indicates it is an unearned
run and the third indicates no RBI.</font>
  <p><font size="+1"><span style="font-family: monospace;">play,2,1,willk001,11,BFX,E6/G6.3-H(RBI);2-3;B-1</span></font><font
 size="+1"><br>
In this play an RBI is given to the batter.</font>
</blockquote>
<p><font size="+1">Interference can be indicated with an advance
parameter. An alternative way of writing this is (5/INT).</font>
<blockquote style="font-family: monospace;"><font size="+1">play,2,0,stanp001,12,CCBX,S/L9S.3-H;2X3(5/INT);1-2<br>
com,"$Gonzalez out for grabbing coach on way back to 3B"</font></blockquote>
<p><font size="+1">Team unearned runs are indicated by TUR in cases
with more than one pitcher in the inning and the current pitcher is to
be charged with an earned run.</font>
<blockquote style="font-family: monospace;"><font size="+1">play,5,1,ashba001,??,,S9.3-H(TUR);2-H(TUR);1-3;BX2(93)</font></blockquote>
<p><font size="+1">A U appearing in a fielding sequence indicates
the fielder handling the ball is unknown.</font>
<blockquote><font size="+1"><span style="font-family: monospace;">play,7,0,perrg001,21,B.BFX,S8.2-H;BX2(8U3)</span></font><font
 size="+1"><br>
In the 8U3 sequence most likely the U is the shortstop or second
baseman.<br>
This notation is present in older files, but is no longer routinely used.</font></blockquote>
<p><a name="7"></a><font size="+1">Advance parameters provide an
alternative way of indicating wild pitches and passed
balls.</font>
<blockquote style="font-family: monospace;"><font size="+1">play,5,0,feldm001,22,1LPB&gt;F1S,K.1-2(WP)</font></blockquote>
<p><font size="+1">

<hr>Replay
Instant replay of home run calls was instituted on 8/28/2008. It was expanded at the start of the 2014 
season to include many other types of plays. For a more complete explanation and list all replays, see 
the following two pages.

https://www.retrosheet.org/ReplayHR.htm
https://www.retrosheet.org/Replay.htm

Each time the replay system is used, a slash tag is added to the play string. This will be /UREV for an 
umpire-initiated review and /MREV for a manager challenge. Immediately after that play there will be a 
comment record with details of the replay/challenge. The fields in this string are:

com,"replay,inning,Batter ID,Batter Team ID,Umpire ID,Ballpark ID,Reason,Reversed,Initiator,Team,Type 
Code"

   Inning: inning in which the replay occurred
   Batter ID: batter for the replay instance (not necessarily the player involved in the replay)
   Batter Team ID: the team at bat for the replay
   Umpire ID: crew chief's ID
   Ballpark ID: the ballpark in which the game was played
   Reason (home run replay only):
      O - Over the fence
      F - Fair/foul
      I - Fan interference
   Reversed: Y or N
   Initiator: I (home run instant replay, 2008-13), U (umpire, 2014-present), M (manager, 2014-present)
   Team: team which challenged (only for M initiator)
   Type code:
     Code,Desc
     H,Home run
     G,Grounds rule
     N,Fan interference
     S,Boundary call
     C,Force play
     A,Tag play
     O,Fair/foul (outfield)
     T,Trap play (outfield)
     I,Hit by pitch
     M,Timing play
     B,Touching a base
     R,Passing runners
     K,Record keeping
     L,Multiple issues
     P,Home plate collision
     X,Other
<hr>
Ejections

Each time someone is ejected by an umpire, there will be multiple comments about the incident. This 
ejected person could be a player, coach, manager, trainer, mascot or fan. The first line will contain 
details in the following record format.

com,"ej,Ejectee,Job Code,Umpire ID,Reason"
   Ejectee: the ID of the person ejected
   Job Code
      P - Player
      M - Manager
      C - Coach
      T - Trainer
      N - Non-uniformed person
   Umpire ID: the umpire who ejected the person
   Reason: Short description

We have made an effort to standardize the text used in the reason field.

All following comments with be text describing the incident. It is most usual for it to be as simple as this.
com,"Babe Ruth ejected by HP umpire Tommy Connolly"

However, there are many ejections with more detailed text describing the incident.

<hr>
Umpire changes during games

Occasionally, an umpire will be injured or develop an illness during a game. When there are changes to 
the umpire alignment during a game, there will be multiple comments with standardized fields to 
describe the change.

com,"umpchange,Inning,Position,Umpire ID"
   umpchange: standard text
   Inning: the inning in which the change took place
   Position:
      umphome
      ump1b
      ump2b
      ump3b
      umplf
      umprf
   This is the position with the new umpire
   Umpire ID: The umpire who changed positions. It is "(none)" if the position becomes vacant.
   These records are usually followed by a comment containing a text description of the reason.

<hr>
Protests

When a manager protests an umpire ruling to the league office, a comment is added to the game to 
indicate the details of that protest. This comment is usually at the start of the game.

com,"Protest=Code"
   Code
      P - unidentified team
      V - disallowed protest by visiting team
      H - disallowed protest by home team
      X - upheld protest by visiting team
      Y - upheld protest by home team

Usually, there is a detailed comment at the spot in the game where the protest occurred.

<hr>
Suspensions

When a game is suspended by weather or other conditions, a comment is added to the game to indicate 
the details of the suspension. This comment is usually at the start of the game.

com,"Suspend=YYYYMMDD,ParkID,Vis,Home,Outs"
    YYYYMMDD - completion date
    ParkID: if the game was resumed in another park from where it started
    Vis - visitor score at time of suspension
    Home - Home score at time of suspension
    Outs - Length of game in outs at time of suspension

</font></p>
<center><font size="+1">
<hr>Page Updated: 12/01/2022<br>
All data contained at this site is copyright &copy; 1996-2022 by
Retrosheet. All Rights Reserved.</font></center>
</body>
</html>
