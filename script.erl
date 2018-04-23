
-include("acc.erl").
-import(acc,[get_students/0,get_females/2,get_grant/2, get_sum/2]).
-import(io, [format/2]).



Students=acc:get_students()