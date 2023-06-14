<html>
<TITLE>Using Retrosheet Data</TITLE>
<link rel="stylesheet" type="text/css" href="https://www.retrosheet.org/menubar/menubar.css">
<script type="text/javascript" src="https://www.retrosheet.org/menubar/menubar.js"></script>
<center>
<IMG SRC="h-logo.jpg" align=CENTER alt=retrosheet><p>
<hr>
</center>
<!--....................................................-->
<center>
<h2>How to Use Our Game Data</h2>
</center>
The ".zip" file archives you can download contain several files
that can be expanded and written to your hard disk using the
program PKUNZIP.EXE, which is available for downloading under
the Tools selection.  Several other programs can expand and
manage .zip files.  The game data archives contain event files,
roster files for the league, and a team names and abbreviations
file.  All files are standard ASCII text files.
<p>  
In the team archive files there are two event files, one for the
home games, and one for road games.  For example, for the 1983
Yankees, these files are named 83NYA.EVA and 83NYARD.EVA,
respectively.  The league archive files contain the home game
event files for each team. The files are standard ASCII text  
files and in each file the games are in chronological order.  
<p> 
For each game there are eight different record types.  Each  
record type has a unique designator, which is followed by several 
fields separated by commas.  The eight record types and their  
possible fields are described below.  
<p> 
ID   Each game begins with a ten digit ID record which identifies 
the date, location, and number of the game.  For example, 
NYA6704140 should be read as follows.  The first three characters 
identify the home team (the Yanks).  The next two are the last two 
digits of the year (1967).  The next two are the month (April), the 
next two are the day (14).  The last digit is the number of the 
game: here it is a 0 for a single game; it would be 1 for the 
first game of a double header, 2 for the second game.  
<p>  
version   The version statement is next and tracks when the file  
          was created.
<p> 
info      There are about 30 info records, each of which contains a  
          single piece of information, such as the temperature,  
          the attendance, the identity of each umpire, etc.  
<p>  
start     There are 18 (for the NL or pre-DH AL) or 20 (for the  
          AL with the DH) start records, which identify the  
          starting lineups for the game.  Each start record has  
          five fields.   
<p> 
       1. The first field is the Retrosheet ID code,  
          which is unique for each player.  This 8 digit code is  
          constructed from the first four letters of the player's 
          last name, the first initial of his common name, and a  
          three digit number.
<p> 
       2. The second field is the player's name.  
  
       3. The next field is either 0 (for visiting team), or 1  
          (for home team).  
  
       4. The next field is the position in the batting order.  
  
       5. The last field is the starting fielding position.  The  
          numbers are the standard notation, with designated  
          hitters being identified as position 10.  
  
play      The play records contain the events of the game.  Each  
          play record has 7 fields.  
  
       1. The first field is the inning.  
  
       2. The second field is either 0 (for visiting team) or 1  
          (for home team).  
  
       3. The third field is the Retrosheet ID code.  
  
       4. The fourth field is the count on the batter when this  
          particular event (play) occurred.  Most Retrosheet
          games do not have this information, and in such cases,
          "??" appears in this field. 
  
       5. The fifth field is of variable length and contains all  
          pitches to this batter in this plate appearance.  The  
          standard pitches are:  C for called strike, S for  
          swinging strike, B for ball, F for foul ball.  In  
          addition, pickoff throws are indicated by the number of 
          the base the throw went to.  For example, "1" means the 
          pitcher made a throw to first, "2" a throw to second,  
          etc.  If the base number is preceded by a "+" sign, the 
          pickoff throw was made by the catcher.  Most Retrosheet  
          games do not have pitch data and consequnetly this field  
          is blank for such games. 
  
          There is occasionally more than one event for each  
          plate appearance, such as stolen bases, wild pitches,  
          and balks in which the same batter remains at the  
          plate.  On these occasions the pitch sequence is  
          interrupted by a period, and there is another play  
          record for the resumption of the batter's plate  
          appearance.  
  
       6. The sixth field describes the play which occurred.   
          This field is variable in length and has three main  
          portions which follow the Retrosheet scoring  
          system.  The scoring procedure description also  
          contains a diagram that explains clearly how each area  
          of the playing field is designated.  
  
            a. The first portion is a description of the basic  
               play, following standard baseball scoring  
               notation.  For example, a fly ball to center field 
               is "8", a ground ball to second is "43", etc.   
               Base hits are abbreviated with a letter (S for  
               singles, D for doubles, T for triples, H for home  
               runs) and (usually) a number identifying the  
               fielder who played the ball.  Therefore "S7" is a  
               single fielded by the left fielder.  
  
            b. The second portion is a modifier of the first part 
               and is separated from it with a forward slash,  
               "/".  In fact, there may be more than one second  
               portion.  Typical examples are hit locations.  For  
               example, "D8/78" indicates a double fielded by the 
               center fielder on a ball hit to left center.   
               Other possible second portion modifiers are "SH"  
               for sacrifice hits, GDP for grounding into double  
               plays, etc.  
  
            c. The third portion describes the advancement of any 
               runners, separated from the earlier parts by a  
               period.  For example, "S9/L9S.2-H;1-3"  should be  
               read as: single fielded by the right fielder, line 
               drive  to short right field.  The runner on 2nd 
               scored (advanced to home), and the runner on first 
               advanced to third.  Note that any advances after  
               the first are separated by semicolons.  
  
com  This record is used for those plays which require a special  
     comment to describe the event.  
  
sub  Whenever any change in the lineup occurs, there is a  
     substitute record.  There are five fields in this type of  
     record.  
  
       a. The first field is the Retrosheet ID code.  
  
       b. The second field is the player's name.  
  
       c. The third field is either 0 (visiting team) or 1 (home  
          team).  
  
       d. The fourth field is batting order position of the  
          substitute.  
  
       e. The fifth field is the position the substitute is going 
          to play.  Code "11" is for pinch hitters and "12" is  
          for pinch runners.  
  
     Note that whenever a substitution occurs, it is preceded by  
     a play record with the play event described as "NP", meaning 
     No Play.  The purpose of this record is to "mark the place"  
     of the substitution for the DWBOX and BEVENT programs 
     described below.  
  
data      The several data records appear after all plays from  
     the game and contain the number of earned runs allowed by  
     each pitcher.  Each record contains the pitcher's Project  
     Scoresheet code and the number of earned runs he allowed.  
  
  
There are three programs with your data which facilitate your 
analysis of the raw play by play information. These programs are 
called DWBOX, BEVENT and BGAME.  Their functions are described here 
in detail.  
 
_________________________ 
  
DWBOX  
     The purpose of DWBOX is to generate newspaper (or Sporting  
News) style box scores from the event file.  It is designed so  
that you can print box scores of specific games or all games in  
an event file.  There are three specific ways in which DWBOX may be 
run, each of which involves invoking a different "switch".  
  
  1. The simplest use of DWBOX is to print all the games in the  
     file.  For example, the file 1967NYA.EVA contains all the Yanks 
     home games.  To print a box score of all games in this file, 
     be sure your printer is on and ready and type:  
  
          DWBOX 1967NYA.EVA>PRN  
  
     If you leave out the ">PRN" at the end of the command, then  
     all the box scores will be displayed on your monitor in a  
     continuous unreadable stream.  As an alternative you may  
     direct the output to a new file on your disk for later  
     examination.  In this example such a file might have the  
     name "Yanksbox".  In that case the command would be:  
  
          DWBOX 1967NYA.EVA>YANKSBOX  
  
  2. The second choice is to print a box score for a specific  
     game for which you know the GameID, for example, NYA6704140, 
     the game we considered above.  In this case, prepare your  
     printer and type:  
  
          DWBOX -i NYA6704140 1967NYA.EVA>PRN  
  
     Note that you must specify both the GameID as well as the  
     name of the file which contains the game.
  
     When this -i switch is used, the DWBOX program searches the  
     entire event file from the start for the GameID you specify.  
     Depending on your equipment, this search may take many  
     seconds or even a few minutes.  After your requested game  
     has been printed, the DWBOX program will continue to search to 
     the end of the file, another potentially time-consuming  
     process.  
  
  3. The third choice for using DWBOX is important if you don't  
     remember a desired GameId.  In this option, the DWBOX program  
     searches through the file you specify, displays each GameID  
     on the screen for you, and asks if you want that game  
     printed.  You must respond yes or no for each game.  The  
     format of this command is:  
  
          DWBOX -q 1967NYA.EVA>PRN  
  
It is important to note that in order to use DWBOX, you must have  
the TEAM file and the ROSTER files in the directory with the DWBOX  
program and the event files.  These files are included in the .zip  
archive.  
 
_________________________ 
  
BEVENT  
     The purpose of BEVENT is to prepare a report of a game in  
what is called game state format.  BEVENT examines event files 
and translates each play of a game into a new record format that  
presents several items of situational information such as: number 
of outs, score of game, identity of pitcher, handedness of batter 
and pitcher, identity of any runners along with the play results.  
There are 75 different fields which may be created for each 
BEVENT record.  You have the ability to control which of these 
fields is created.  The list of these fields may be obtained by 
the command: 
 
          BEVENT -d
 
There are several other switches which may be used with BEVENT, 
three of which are the same as described above for DWBOX.  TO 
obtain a list of these options, enter the command: 
 
          BEVENT -h 
 
As before, the output of any BEVENT command may be directed to a 
printer or to a file. 
  
Some BFILE fields are numbers and some are strings (that is, non- 
numeric characters).  In all cases the strings are enclosed by  
double quotes so that the records can be correctly imported into  
spreadsheet and database programs.  The following explanations 
describe the meaning of each field. 
 
 
game id   GameID following the format described above. 
 
event num   All events are numbered consecutively throughout a 
          game for easy reference. 
 
inning    Inning in which this play took place.   
 
batting team      A one character identification of the team at 
          bat: 0 for the visiting team and 1 for the home team. 
 
outs      Number of outs before this play.  
 
balls, strikes, pitch sequence  present these items of 
          information for this play. 
 
vis score  Number of runs for the visiting team before this play. 
  
home score  Number of runs for the home team before this play.  
  
batter    Retrosheet ID code for the batter.  
  
batter hand    One character which describes how the batter 
          batted for this event (L or R).  
  
res batter and res batter hand     These fields are almost always 
          the same as batter and batter hand.  They only change 
          if the batter is replaced during the time at bat and 
          the final event is charged to the previous batter.  For 
          example, if a pinch-hitter is inserted with two strikes 
          and then takes strike three, the strikeout is charged 
          to the first batter (the responsible batter) 
 
pitcher   Retrosheet ID code for the pitcher.  
  
pitcher hand   The hand with which the pitcher throws (L or R) 
 
res pitcher and res pitcher hand  Counterparts to res batter and 
          res batter hand for those occasions when a pitcher is 
          changed during an at bat and the first pitcher is 
          charged with the result.  For example, if a relief 
          pitcher enters with a 3 ball, no strike count and 
          throws ball 4, then the walk is charged to the first 
          pitcher. 
 
positions    The next eight fields contain the Retrosheet 
          ID code for the men playing each of the eight fielding 
          positions, in numerical sequence by position number. 
 
first runner, second runner, third runner    These are three 
          consecutive fields which contain the Retrosheet 
          ID codes for the runner at each base.  If a base is not 
          occupied, then the field has no width and there will be 
          a pair of double quotes with no  
          space between them.  
  
          For example, Bill Ripken on first as the only runner:  
  
               "ripkb001","","",  
  
          Or, with Joe Orsulak on first and Cal Ripken on third:  
  
               "orsuj001","","ripkc001"  
 
event text     The complete description of the play using the 
          format described above for the event files. 
 
leadoff flag  A one character descriptor which is T for the first 
          batter of each inning and F for all others.  
 
pinchhit flag  Another one character flag which is T for pinch 
          hitters and F for all others. 
 
defensive position  The defensive position currently being played 
          by this batter.  The field is blank for pinch hitters 
          except for pinch hitters for the designated hitter.  In 
          this case the defensive position is DH, since a pinch 
          hitter or pinch runner automatically becomes the DH 
          when entering the game. 
 
lineup position     Position in the batting order for this 
          batter. 
 
event type     There are 25 different numeric codes to describe  
          the type of event.  
  
     Code      Meaning                  
      0        Unknown event  
      1        No event  
      2        Generic out  
      3        Strikeout  
      4        Stolen base  
      5        Defensive indifference  
      6        Caught stealing  
      7        Pickoff error  
      8        Pickoff  
      9        Wild pitch  
     10        Passed ball  
     11        Balk  
     12        Other advance  
     13        Foul error  
     14        Walk  
     15        Intentional walk  
     16        Hit by pitch  
     17        Interference  
     18        Error  
     19        Fielder's choice  
     20        Single  
     21        Double  
     22        Triple  
     23        Home run  
     24        Missing play  
 
batter event flag   A one character indication of whether or not 
          the event terminated the batter's appearance. 
          T = yes, which is most common; F = no, meaning the same 
          batter stayed at the plate, such as after a stolen 
          base.  
  
ab flag   A one character indication of whether batter was  
          charged with at bat: T = yes, F = no.  
  
hit value  One number indicating value of hit.  0 = no hit; 1 =  
          single; 2 = double; 3 = triple; 4 = home run.  
  
SH flag  One character indicating sacrifice hit: T = yes; F = no. 
  
SF flag  One character indicating sacrifice fly: T = yes; F = no. 
  
outs on play   Number of outs recorded on this play.  
  
double play flag    One character field of DP or not 
 
triple play flag    Once character field of TP or not 
 
RBI on play    Number of RBI credited to batter on this play.  
  
wild pitch flag, passed ball flag  Two records with indication of 
          WP or PB on this play. 
 
fielded by     Identity of the fielder who played the ball.  This 
          is especially important for base hits when no formal 
          fielding credit is given. 
 
batted ball type    Descriptor which is either F (fly), L (line), 
          P (pop), or G (ground). 
 
bunt flag   Descriptor for whether or not play was a bunt. 
 
foul flag   Descriptor for whether or not ball was played in foul 
          ground. 
 
hit location   The zone on the field where the ball was hit.  See 
          the description of the Retrosheet scoring 
          system for details. 
 
num errors     Number of errors on this play (a maximum of three 
          is assumed). 
 
error players and types   These are 6 consecutive fields which 
          identify the player committing the 1st, 2nd or 3rd 
          errors on the play and the type of error each was 
          (throw or drop). 
 
batter dest    The base which the batter reached at the 
          conclusion of the play.  If he was out, the base is 0. 
 
runner dest    The next three fields contain the base reached by 
          each of the three runners at the conclusion of the 
          play.  If there was no advance then the base shown will 
          be the one where he started. 
 
          Note carefully that these runner fields are not updated 
          on plays which end an inning, even if the inning-ending 
          play would have resulted in an advance of one or more 
          runners had it occurred earlier in the inning.   
  
plays     The next four fields indicate the play (if any) made on 
          the batter and each of the runners (if any) 
 
SB, CS, PO flags    The last nine fields contain single character 
          descriptors for each of the runners indicating whether 
          or not he had a stolen base, was caught stealing or was 
          picked off. 
  
As with DWBOX, you must have the TEAM and ROSTER files in the same  
directory with the BEVENT program and the event files.  
  
  
IMPORTANT      If you run BEVENT and generate all the possible 
fields, the output will be more than three times the size of the 
event file you specified to the program.  It is suggested that 
you generate only a subset of all possible fields at any single 
time, since most studies will not need all of the information at 
one time.  BEVENT may then be run again, specifying different 
fields for the output, for a subsequent study. 
 
_________________________ 
 
BGAME 
  
The purpose of this program is to generate a summary of those 
items which are constant for each game, such as date, indication 
of day or night, identity of umpires, etc.  There is alos summary data
of the game, such as the final score.  The output of BGAME 
may be coordinated with that from BEVENT since they use the same 
GameID code.  The use of this program is similar to BEVENT in 
that there are several switches to create the precise output 
desired.  To see the options enter the command: 
 
          BGAME -h 
 
<!--....................................................-->
<center>
<hr>
<a href=index.html>Return to Retrosheet Home Page</a>
<p> 
Page Updated:  10/8/96
<br>
<b> All data contained at this site is copyright &#169 1996 by Retrosheet.  All Rights Reserved.
</b>
</center>
</html>
</body>
