#!/usr/bin/env python
# -*- coding: utf-8 -*-

from collections import defaultdict
from pprint import pprint

def print_report(target_dict):

    len_pairs = len(target_dict)
    print 'Pairs Number: {:>6,}'.format(len_pairs)
    print

    print 'Count Each Lengths of Values:'

    lenv_count_map = defaultdict(int)
    for k, v in target_dict.iteritems():
        lenv_count_map[len(v)] += 1
    total_count = sum(lenv_count_map.itervalues())

    cum_pct = .0
    for lenv, count in sorted(lenv_count_map.iteritems(), key=lambda k: k[1], reverse=True):
        pct = 100.*count/total_count
        cum_pct += pct
        print '{:>6,} | {:>6,} | {:>5.2f}% | {:>5.2f}%'.format(lenv, count, pct, cum_pct)
    print

    print 'Total  : {:>6,}'.format(total_count)
    print 'Average: {:>9,.2f}'.format(1.*total_count/len(lenv_count_map))

if __name__ == '__main__':

    from time import time

    start = time()
    import zipcodetw
    end = time()

    print '# Tokens -> Zipcodes'
    print
    print_report(zipcodetw._dir.tokens_zipcodes_map)
    print
    print

    print '# Zipcode -> Rule Strs'
    print
    print_report(zipcodetw._dir.zipcode_rule_strs_map)
    print
    print

    print 'Took {:.4f}s to load.'.format(end-start)
