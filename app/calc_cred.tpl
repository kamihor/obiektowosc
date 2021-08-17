{extends file="../templates/main.html"}

{block name=footer}Autor: Kamil Horzela{/block}


<h2 class="content-head is-center">Prosty kalkulator</h2>

{block name=content}
<div id="main" class="wrapper style1">
    <div class="container">
        <section>
            <form method="post" action="#">
                <div class="form">
                    <input type="text" name="value" id="value" value="{$form->value}" placeholder="Kwota" />
                    <input type="text"  name="years" id="years" value="{$form->years}" placeholder="Okres spłaty w latach" />
                    <input type="text"  name="percent" id="percent" value="{$form->percent}" placeholder="Oprocentowanie" />
                    <ul class="actions">
                        <li><input style="margin-top: 1em;" type="submit" value="Oblicz" class="primary" /></li>
                    </ul>
                </div>
            </form>

            
            {if $messages->isError()}
                <ol class="messbox">
            {foreach $messages->getErrors() as $err}
            <ul class="alt">
                <li> {$err} </li>
            </ul>
            {/foreach}
            </ol>
            {/if}


        
                {if $messages->isInfo()}
                <ol class="messbox">
            {foreach $messages->getInfos() as $inf}
            <ul class="alt">
                <li> {$inf} </li>
            </ul>
            {/foreach}
            </ol>
            {/if}



            {if isset($result->result)}
                <ol class="messbox">
            <h4>Miesięczna rata</h4>
            <p class="res">
                {$result->result|string_format:"%.2f"}
                zł
            </p>
            </ol>
            {/if}     


        </section>
    </div>
</div>
{/block}

{block name=footer}
<!-- Footer -->
<footer id="footer">
    <ul class="copyright">
        <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    </ul>
</footer>

{/block}

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
