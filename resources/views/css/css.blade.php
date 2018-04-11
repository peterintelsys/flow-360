@extends('layouts.main')

@section('title', 'CSS index')


@section('content')

<div class="container">

        <h1>CSS test</h1>

        
        <h3>CSS base</h3>
        <ul>
            <li><a href="#grids">Grid</a></li>
            <li><a href="#headings">Headings</a></li>
            <li><a href="#links">Links</a></li>
            <li><a href="#buttons">Buttons</a></li>
            <li><a href="#forms">Forms</a></li>
            <li><a href="#tables">Tables</a></li>
        </ul>

        <h3>CSS Modules</h3>
        <ul>
            <li><a href="/css/card">Cards</a></li>
            
        </ul>

        <hr>

    <div id="grids">
        <h3>Grids</h3>

        <div class="flex-grid grid-1">

            <div style="background-color: lightgrey;">One column</div>

        </div>

        <div class="flex-grid grid-2">

            <div style="background-color: lightgrey;">Two column</div>
            <div style="background-color: lightgrey;">Two column</div>

        </div>

        <div class="flex-grid grid-3">

            <div style="background-color: lightgrey;">Three column</div>
            <div style="background-color: lightgrey;">Three column</div>
            <div style="background-color: lightgrey;">Three column</div>

        </div>

        <div class="flex-grid grid-4">

            <div style="background-color: lightgrey;">Four column</div>
            <div style="background-color: lightgrey;">Four column</div>
            <div style="background-color: lightgrey;">Four column</div>
            <div style="background-color: lightgrey;">Four column</div>

        </div>

        <div class="flex-grid grid-2-1">

            <div style="background-color: lightgrey;">Four column</div>
            <div style="background-color: lightgrey;">Four column</div>

        </div>



        <hr>
    </div>
           
     <div id="headings">       
            <h3>Headings</h3>

            <h1>Heading h1</h1>
            <p>CSS3 introduces a few new units, including the rem unit, which stands for "root em". The rem unit is relative to the font-size of the root element html . That means that we can define a single font size on the root element, and define all rem units to be a percentage of that. The typography has font-size defined in 1.6rem (16px) and line-height in 1.6 (24px). Milligram uses the font-family Roboto, created by Christian Robertson, and provided by Google.</p>

            <h2>Heading h2</h2>
            <p>CSS3 introduces a few new units, including the rem unit, which stands for "root em". The rem unit is relative to the font-size of the root element html . That means that we can define a single font size on the root element, and define all rem units to be a percentage of that. The typography has font-size defined in 1.6rem (16px) and line-height in 1.6 (24px). Milligram uses the font-family Roboto, created by Christian Robertson, and provided by Google.</p>

            <h3>Heading h3</h3>
            <p>CSS3 introduces a few new units, including the rem unit, which stands for "root em". The rem unit is relative to the font-size of the root element html . That means that we can define a single font size on the root element, and define all rem units to be a percentage of that. The typography has font-size defined in 1.6rem (16px) and line-height in 1.6 (24px). Milligram uses the font-family Roboto, created by Christian Robertson, and provided by Google.</p>

            <h3>Text</h3>
            
            <h4>Paragrafer</h4>
            <p>CSS3 introduces a few new units, including the rem unit, which stands for "root em". The rem unit is relative to the font-size of the root element html . That means that we can define a single font size on the root element, and define all rem units to be a percentage of that. The typography has font-size defined in 1.6rem (16px) and line-height in 1.6 (24px). Milligram uses the font-family Roboto, created by Christian Robertson, and provided by Google.</p>

         <hr>
         </div>   
        
        <div id="grids">
            <h3>Links</h3>

        <a href="">Test</a> <a href="">Test</a>
        <hr>
        </div>

        <div id="buttons">
        <a href="" class="button button-large">Klicka</a> <a href="" class="button outlined">Klicka</a> <a href="" class="button button-small">Klicka</a>
    
        <hr>
        </div>

        <div id="forms" style="width:400px;">

            <h3>Forms</h3>
           
        <form>
          <fieldset>
            
            <div class="flex-grid grid-2">
            <div>
            <label for="nameField">Name</label>
            <input type="text" placeholder="CJ Patoilo" id="nameField">
            </div>
            <div>
            <label for="nameField">Name</label>
            <input type="text" placeholder="CJ Patoilo" id="nameField">
            </div>
            </div>
            <label for="ageRangeField">Age Range</label>
            <select id="ageRangeField">
                <option value="0-13">0-13</option>
                <option value="14-17">14-17</option>
                <option value="18-23">18-23</option>
                <option value="24+">24+</option>
            </select>
            <label for="commentField">Comment</label>
            <textarea placeholder="Hi CJ …" id="commentField"></textarea>
            <div class="float-right">
            <input type="checkbox" id="confirmField">
            <label class="label-inline" for="confirmField">Send a copy to yourself</label>
            </div>
            <input class="button outlined" type="submit" value="Send">
            </fieldset>
        </form> 

        
        </div>
        <br><br>
        <hr>
        <br><br>
        <div id="tables">

            <table>
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Adress</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Peter</td>
                        <td>Paulsson</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Melvin</td>
                        <td>Cedervall</td>
                    </tr>
                </tbody>
            </table>

        </div>    



        </div>

@endsection