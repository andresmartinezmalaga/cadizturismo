<?php 
class Cms5a672bf222102567620751_37dd29f86630469f999b691def008ac4Class extends \Cms\Classes\PartialCode
{
public function onStart()
    {
        if($this['lang'] == 'es'){
            $this['menulang'] = 'nombrees';
            $this['allEvents'] = 'Todos los eventos';
            $this['whereToGo'] = 'Dónde ir';
            $this['whatToDo'] = 'Qué hacer';
            $this['whatToLive'] = 'Qué vivir';
            $this['myStance'] = 'Mi estancia';

        } elseif ($this['lang'] == 'en') {
            $this['menulang'] = 'nombreen';
            $this['allEvents'] = 'All events';
            $this['whereToGo'] = 'Where to go';
            $this['whatToDo'] = 'What to do';
            $this['whatToLive'] = 'What to live';
            $this['myStance'] = 'My stance';

        } elseif ($this['lang'] == 'fr') {
            $this['menulang'] = 'nombrefr';
            $this['allEvents'] = 'Todos los eventos';
            $this['whereToGo'] = 'Dónde ir';
            $this['whatToDo'] = 'Qué hacer';
            $this['whatToLive'] = 'Qué vivir';
            $this['myStance'] = 'Mi estancia';

        } elseif ($this['lang'] == 'de') {
            $this['menulang'] = 'nombrede';
            $this['allEvents'] = 'Todos los eventos';
            $this['whereToGo'] = 'Dónde ir';
            $this['whatToDo'] = 'Qué hacer';
            $this['whatToLive'] = 'Qué vivir';
            $this['myStance'] = 'Mi estancia';

        } elseif ($this['lang'] == 'ru') {
            $this['menulang'] = 'nombreru';
            $this['allEvents'] = 'Todos los eventos';
            $this['whereToGo'] = 'Dónde ir';
            $this['whatToDo'] = 'Qué hacer';
            $this['whatToLive'] = 'Qué vivir';
            $this['myStance'] = 'Mi estancia';

        }
    }
}
