-module(main).
-export([get_students/0]).

get_students()->
[{student,1,"Sasha",5000},
{student,2,"Dasha",10000},
{student,3,"Igor", 7555},
{student, 4,"Anton",8248},
{student, 5, "Rodya",9999}].

Students=main:get_students().




