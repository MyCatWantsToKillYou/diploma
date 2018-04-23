-module(acc).
-export([get_students/0,get_females/1,get_idgrant/2, get_sum/1, get_even_id/1, get_sum_males/1]).

get_students()->
[{student,1,"Sasha",male,3000},
{student,2,"Dasha",female,5450},
{student,3,"Igor",male,6600},
{student,4,"Anton",male,6700},
{student,5,"Rodya",male,10000},
{student,6,"Diana",female,10255},
{student,7,"Alyona",female, 8350}
].





get_idgrant([], Acc)-> lists:reverse(Acc);

get_idgrant([Student | Rest], Acc)->
	{_,_,Name,_,Grant}=Student,
	get_idgrant(Rest,[{Name, Grant} | Acc]).

get_sum(Students)->get_sum(Students,0).

get_sum([], Sum)-> Sum;
	
get_sum([First | Rest], Sum)->
	{student,_,_,_,Grant}=First,

	get_sum(Rest, Grant + Sum).


get_females(Students)->get_females(Students,[]).

get_females([], Acc)-> lists:reverse(Acc);

get_females([Student | Rest], Acc)->
case Student of
	{student,_,_,male,_}->get_females(Rest, Acc);
	{student,_,_,female,_}->get_females(Rest, [Student | Acc])
end.


get_even_id(Students)->
lists:filter(fun({_,Id,_,_,_})-> (Id rem 2)=:=0 end, Students).



get_sum_males(Students)->get_sum_males(Students,0).

get_sum_males([], Sum)->Sum;

get_sum_males([First | Rest], Sum)-> 

{student,_,_,_,Grant}=First,
case First of
	{student,_,_,male,_}->get_sum_males(Rest, Sum+Grant);
	{student,_,_,female,_}->get_sum_males(Rest, Sum+0)
end.






%get_male_grant(Students) -> get_male_grant(Students, []).

%get_male_grant(Students, []) ->

%lists:filter(fun({_,_,_,Gender,_})-> Gender =:= male end, Students);

%fun(Students, Sum)-> Sum;
%	{student,_,_}

%get_male_grant(Students, []).






