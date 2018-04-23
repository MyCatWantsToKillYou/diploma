-module(gen_list).
-export([get_females/0, get_males/0, get_full_list/3]).

get_females()->[{"Kate",170},{"Mary",170},{"Jenn",155}].

get_males()->[{"Brett",180},{"John",170},{"Will",170}].


get_full_list(Males, Females, Acc)->
	
[{NameF, NameM} || 
	{NameM, GrowthM}<-Males,
	{NameF, GrowthF}<-Females].





